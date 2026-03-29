<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index-styles.css">
    <link rel="stylesheet" href="css/logout.css">
    <script src="js/index.js"></script>
    <title>Place Orders</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">


            <!-- LEFT PART OF ORDER PAGE -->
            <div class="col-md-2">


                <!-- LOGO AND COMPANY NAME -->
                <div class="text-center">
                    <img class="logo img-fluid" src="images/mr.squidee_image.jpg" alt="Mr. Squidee">
                    <h2>Mr. Squidee</h2>
                </div>


                <!-- NAVIGATION BAR FOR FEATURE SELECTION -->
                <div class="nav nav-selection flex-column">
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-cart-shopping"></i> Place Order</a>
                    <a class="nav-link" href="current_order.php"><i class="fa-solid fa-clipboard-list"></i> All Orders</a>
                    <a class="nav-link" href="manage_products.php"><i class="fa-solid fa-box-open"></i> Manage Products</a>
                    <a class="nav-link" href="generate_reports.php"><i class="fa-solid fa-chart-line"></i> Generate Reports</a>
                    <a class="nav-link" href="user_profile.php"><i class="fa-solid fa-user-gear"></i> User Profile</a>
                    <a class="nav-link" href="inventory.php"><i class="fa-solid fa-warehouse"></i> Inventory</a>
                    <a class="nav-link" href="#" id="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </div>                
            </div>