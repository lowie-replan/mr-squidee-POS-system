<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/generate-reports-styles.css">
    <link rel="stylesheet" href="css/logout.css">
    <script src="js/generate-_reports.js"></script>
    <title>Manage Products</title>
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


            <!-- RIGHT PART OF THE PAGE-->
            <div class="col-md-10">
                <h1><i class="fa-solid fa-chart-line fa-2xl"></i> Generate Reports</h1>
                <br>
                <form action="/action_page.php" class="dateSelect">
                    <label for="date"></label>
                    <input type="date" id="date" name="date">
                    <input type="submit" class="submit">
                  </form>
                  <br>
                  <h3>Total Amount Generated:</h3>
                  <br>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center">Total Quantity Sold</th>
                                <th class="text-center">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody id="productTable">
                            <tr>
                                <td>Product Name #1</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Product Name #1</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Product Name #1</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Product Name #1</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Product Name #1</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Product Name #1</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                    </table>
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
    </script>
</body>
</html>