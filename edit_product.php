<?php
$conn = new mysqli("localhost", "root", "", "pos_system");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $availability = $_POST['availability'];

    $sql = "UPDATE products SET name=?, price=?, category=?, available=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdsii", $name, $price, $category, $availability, $id);

    if ($stmt->execute()) {
        header("Location: manage_products.php");
        exit();
    } else {
        echo "Error updating: " . $stmt->error;
    }
}
?>
