<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    // Prepare SQL query to also fetch first_name and last_name
    $sql = "SELECT id, password, first_name, last_name FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password, $first_name, $last_name);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $user_id;
            $_SESSION["username"] = $username;
            $_SESSION["first_name"] = $first_name;
            $_SESSION["last_name"] = $last_name;

            header("Location: index.php");
            exit();
        } else {
            header("Location: login_page.php?error=Incorrect username or password");
            exit();
        }
    } else {
        header("Location: login_page.php?error=Incorrect username or password");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
