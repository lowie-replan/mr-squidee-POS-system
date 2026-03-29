<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/inventory-styles.css">
    <link rel="stylesheet" href="css/logout.css">
    <script src="js/inventory.js"></script>
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


            <!-- LEFT PART OF THE PAGE-->
            <div class="col-md-10">
                <h1><i class="fa-solid fa-warehouse fa-2xl"></i> Inventory</h1>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5 text-center p-3">
                        <input type="text" id="search" class="form-control" placeholder="Search for Items">
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                              Filter by stocks
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link 1</a></li>
                              <li><a class="dropdown-item" href="#">Link 2</a></li>
                              <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                              Filter by stocks
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link 1</a></li>
                              <li><a class="dropdown-item" href="#">Link 2</a></li>
                              <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-add mb-3">+ Add Item</button>
                    </div>
                </div>
                

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Items</th>
                                <th class="text-center">Current Qty</th>
                                <th class="text-center">Cost/Pack</th>
                                <th class="text-center">Supplier</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="productTable">
                            <tr>
                                <td>Item Name #1</td>
                                <td class="text-center">100</td>
                                <td class="text-center">Php500</td>
                                <td class="text-center">Supplier Name 1</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Item Name #2</td>
                                <td class="text-center">100</td>
                                <td class="text-center">Php500</td>
                                <td class="text-center">Supplier Name 1</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Item Name #3</td>
                                <td class="text-center">100</td>
                                <td class="text-center">Php500</td>
                                <td class="text-center">Supplier Name 1</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Item Name #4</td>
                                <td class="text-center">100</td>
                                <td class="text-center">Php500</td>
                                <td class="text-center">Supplier Name 1</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Item Name #5</td>
                                <td class="text-center">100</td>
                                <td class="text-center">Php500</td>
                                <td class="text-center">Supplier Name 1</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Item Name #6</td>
                                <td class="text-center">100</td>
                                <td class="text-center">Php500</td>
                                <td class="text-center">Supplier Name 1</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
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