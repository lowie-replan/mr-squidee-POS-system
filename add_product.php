<?php
if (isset($_POST['add_product'])) {
    $conn = new mysqli("localhost", "root", "", "pos_system");
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $available = $_POST['availability'];

    // Handle image upload
    $image = $_FILES['product_image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
        $sql = "INSERT INTO products (name, price, category, available, image) 
                VALUES ('$name', '$price', '$category', '$available', '$image')";

        if ($conn->query($sql) === TRUE) {
            header("Location: manage_products.php"); // Refresh the page
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Image upload failed.";
    }

    $conn->close();
}
?>
