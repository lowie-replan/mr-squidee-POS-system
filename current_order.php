<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all-orders-styles.css">
    <link rel="stylesheet" href="css/logout.css">
    <script src="js/all_orders.js"></script>
    <title>Current Orders</title>
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
                    <a class="nav-link" href="current_order.php"><i class="fa-solid fa-clipboard-list"></i> Current Orders</a>
                    <a class="nav-link" href="manage_products.php"><i class="fa-solid fa-box-open"></i> Manage
                        Products</a>
                    <a class="nav-link" href="generate_reports.php"><i class="fa-solid fa-chart-line"></i> Generate
                        Reports</a>
                    <a class="nav-link" href="user_profile.php"><i class="fa-solid fa-user-gear"></i> User Profile</a>
                    <a class="nav-link" href="inventory.php"><i class="fa-solid fa-warehouse"></i> Inventory</a>
                    <a class="nav-link" href="#" id="logout"><i class="fa-solid fa-right-from-bracket"></i>
                        Logout</a>
                </div>
            </div>


            <div class="col-md-10">

                <h1> Current Orders</h1>
                <div class="scroll">

                    <div id="meals" class="scrollable-section">

                        <!-- <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>

                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>

                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>
                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>
                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>
                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>
                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>
                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div>
                        <div class="card item-card">
                            <span class="order-number mb-3">Order #1</span>
                            <p class="totalAmount">Total Amount: Php100</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-color">View Reciept</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-color">Print Reciept</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-black" data-bs-dismiss="modal">Cancel</button>
                    <a href="login_page.php" class="btn btn-yellow">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('logout').addEventListener('click', function () {
            var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
            logoutModal.show();
        });


        document.addEventListener("DOMContentLoaded", function () {
        let orders = JSON.parse(localStorage.getItem("orders")) || []; // Get orders from localStorage
        let mealsContainer = document.getElementById("meals");

        mealsContainer.innerHTML = ""; // Clear existing orders

        if (orders.length === 0) {
            mealsContainer.innerHTML = "<p>No orders yet.</p>"; // Show message if no orders
        } else {
            orders.forEach(order => {
                let orderHTML = `
                    <div class="card item-card">
                        <span class="order-number mb-3">Order #${order.orderNumber}</span>
                        <p class="totalAmount">Total Amount: ${order.totalAmount}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-color">Order Details</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-color">Order Complete</button>
                            </div>
                        </div>
                    </div>
                `;
                mealsContainer.innerHTML += orderHTML; // Append new order
            });
        }
    });

    
</script>

</body>

</html>