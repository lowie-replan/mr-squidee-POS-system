<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from form
    $first_name = trim($_POST["first_name"]);
    $middle_name = trim($_POST["middle_name"]);
    $last_name = trim($_POST["last_name"]);
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $contact_number = trim($_POST["contact_number"]);
    $email = trim($_POST["email"]);
    $sex = $_POST["sex"];
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if username already exists
    $check_sql = "SELECT id FROM users WHERE username = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header("Location: register.php?error=Username already taken");
        exit();
    }
    $stmt->close();

    // Check password match
    if ($password !== $confirm_password) {
        header("Location: register.php?error=Passwords do not match");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert all values into users table
    $sql = "INSERT INTO users 
        (first_name, middle_name, last_name, dob, age, contact_number, email, sex, username, password)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssisssss",
        $first_name,
        $middle_name,
        $last_name,
        $dob,
        $age,
        $contact_number,
        $email,
        $sex,
        $username,
        $hashed_password
    );

    if ($stmt->execute()) {
        header("Location: login_page.php?success=Registration successful! Please log in.");
    } else {
        header("Location: register.php?error=Registration failed. Please try again.");
    }

    $stmt->close();
    $conn->close();
}
?>
