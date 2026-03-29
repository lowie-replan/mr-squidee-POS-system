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
                    <a class="nav-link" href="current_order.php"><i class="fa-solid fa-clipboard-list"></i> Current Orders</a>
                    <a class="nav-link" href="manage_products.php"><i class="fa-solid fa-box-open"></i> Manage Products</a>
                    <a class="nav-link" href="generate_reports.php"><i class="fa-solid fa-chart-line"></i> Generate Reports</a>
                    <a class="nav-link" href="user_profile.php"><i class="fa-solid fa-user-gear"></i> User Profile</a>
                    <a class="nav-link" href="inventory.php"><i class="fa-solid fa-warehouse"></i> Inventory</a>
                    <a class="nav-link" href="#" id="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </div>                
            </div>


            <!-- CENTER PART OF ORDER PAGE-->
            <div class="col-md-6">
                <h1 class="text-center mb-3"> Place Orders</h1>
                <div class="search mb-3">
                    <input type="text" class="form-control" placeholder="Search for foods and drinks">
                </div>


                <!-- NAVIGATION BAR FOR FOOD CATEGORY -->
                <nav class="navbar navbar-expand-sm">
                    <div class="container-fluid">
                        <ul class="navbar-nav d-flex gap-5">
                            <li class="nav-item active">
                              <a class="nav-link" href="#meals"><h5>Meals</h5></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#drinks"><h5>Drinks</h5></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#snacks"><h5>Snacks</h5></a>
                            </li>
                          </ul>
                    </div>
                </nav>


                <!-- SCROLLABLE CONTENT -->
                <div class="scroll">
                    <!-- MEALS SECTION -->
                    <div id="meals" class="scrollable-section">
                        <h3>Meals</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="card item-card" data-name="Lowie John Replan Foodieee" data-price="100" data-img="images/product1.jpg" data-bs-toggle="modal" data-bs-target="#mealModal">
                                <img src="images/product1.jpg" alt="Meal 1">
                                <p>Lowie John Replan Foodieee</p>
                                <p class="price">Php100</p>
                            </div>
                        
                            <div class="card item-card" data-name="Rommel Mesherep" data-price="100" data-img="images/product2.jpg" data-bs-toggle="modal" data-bs-target="#mealModal">
                                <img src="images/product2.jpg" alt="Meal 2">
                                <p>Rommel Mesherep</p>
                                <p class="price">Php100</p>
                            </div>
                        
                            <div class="card item-card" data-name="Meal 3" data-price="100" data-img="images/product3.jpg" data-bs-toggle="modal" data-bs-target="#mealModal">
                                <img src="images/product3.jpg" alt="Meal 3">
                                <p>Meal 3</p>
                                <p class="price">Php100</p>
                            </div>
                        
                            <div class="card item-card" data-name="Meal 4" data-price="100" data-img="images/product4.jpg" data-bs-toggle="modal" data-bs-target="#mealModal">
                                <img src="images/product4.jpg" alt="Meal 4">
                                <p>Meal 4</p>
                                <p class="price">Php100</p>
                            </div>
                        
                            <div class="card item-card" data-name="Meal 5" data-price="100" data-img="images/product5.jpg" data-bs-toggle="modal" data-bs-target="#mealModal">
                                <img src="images/product5.jpg" alt="Meal 5">
                                <p>Meal 5</p>
                                <p class="price">Php100</p>
                            </div>
                        
                            <div class="card item-card" data-name="Meal 6" data-price="100" data-img="images/product6.jpg" data-bs-toggle="modal" data-bs-target="#mealModal">
                                <img src="images/product6.jpg" alt="Meal 6">
                                <p>Meal 6</p>
                                <p class="price">Php100</p>
                            </div>
                        </div>
                        
                    </div>

    
                    <!-- DRINKS SECTION -->
                    <div id="drinks" class="scrollable-section">
                        <h3>Drinks</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="card"><img src="images/drink1.jpg" alt="Drink 1"><h5>Drink 1</h5></div>
                            <div class="card"><img src="images/drink2.jpg" alt="Drink 2"><h5>Drink 2</h5></div>
                            <div class="card"><img src="images/drink3.jpg" alt="Drink 3"><h5>Drink 3</h5></div>
                        </div>
                    </div>
    

                    <!-- SNACKS SECTION -->
                    <div id="snacks" class="scrollable-section">
                        <h3>Snacks</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="card"><img src="images/snack1.jpg" alt="Snack 1"><h5>Snack 1</h5></div>
                            <div class="card"><img src="images/snack2.jpg" alt="Snack 2"><h5>Snack 2</h5></div>
                            <div class="card"><img src="images/snack3.jpg" alt="Snack 3"><h5>Snack 3</h5></div>
                        </div>
                    </div>
                </div>
            </div>
                 

            <!-- RIGHT PART OF THE ORDER PAGE -->
            <div class="col-md-4">
                <h4 id="orderNumber">Order #1</h4>
                <br>
                <p class="dinein">Dine In</p>
                <div class="tableContainer">
                    <table class="table align-middle table-striped" id="dineInTable">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>  
                        </tbody>
                    </table>
                </div>
                <br>

                <p class="takeout">Take Out</p>
                <div class="tableContainer">
                    <table class="table align-middle table-striped" id="takeOutTable">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                
                <br>
                
                <table class="table align-middle table-dark">
                    <tr class="text-center">
                        <td id="total">TOTAL</td>
                        <td id="totalAmount">Php0</td>
                    </tr>
                </table>
                <form action="" class="align-middle text-center">
                    <button type="submit" class="paybtn" id="payButton">Pay</button>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="mealModal" tabindex="-1" aria-labelledby="mealModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mealModalLabel">Meal Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalMealImg" src="" alt="Meal Image" class="img-fluid mb-3">
                    <p id="modalMealName"></p>
    
                    <!-- Dine In / Take Out Options -->
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn btn-outline-primary order-option" id="dineInBtn">Dine In</button>
                        <button class="btn btn-outline-success order-option" id="takeOutBtn">Take Out</button>
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
        document.getElementById('logout').addEventListener('click', function() {
            var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
            logoutModal.show();
        });


        document.getElementById("payButton").addEventListener("click", function () {
        let totalAmount = document.getElementById("totalAmount").innerText; // Get the total price from the ordering page
        let orders = JSON.parse(localStorage.getItem("orders")) || []; // Get previous orders or an empty array

        let newOrder = {
            orderNumber: orders.length + 1, // Increment order number
            totalAmount: totalAmount
        };

        orders.push(newOrder);
        localStorage.setItem("orders", JSON.stringify(orders)); // Save back to localStorage

        window.location.href = "current_order.php"; // Redirect to all orders page
        });

        document.addEventListener("DOMContentLoaded", function () {
        let orderNumber = localStorage.getItem("orderNumber") ? parseInt(localStorage.getItem("orderNumber")) : 1;

        // Get the Order # heading element
        const orderHeading = document.querySelector("h4");

        // Function to update the Order #
        function updateOrderNumber() {
            orderHeading.textContent = `Order #${orderNumber}`;
        }

        // Set the initial Order #
        updateOrderNumber();

        // Add event listener to the Pay button
        document.getElementById("payButton").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent form submission

            // Increment Order #
            orderNumber++;
            localStorage.setItem("orderNumber", orderNumber); // Store in local storage
            updateOrderNumber(); // Update the display
        });
    });

    </script>

</body>
</html>