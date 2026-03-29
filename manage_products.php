<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "", "pos_system"); // change if needed
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Get the search term and selected category from the request
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';

// Start building the SQL query
$sql = "SELECT * FROM products WHERE name LIKE '%" . $conn->real_escape_string($searchTerm) . "%'";

// Add category filter if a category is selected
if ($selectedCategory) {
    $sql .= " AND category = '" . $conn->real_escape_string($selectedCategory) . "'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/manage_products_styles.css">
    <link rel="stylesheet" href="css/logout.css">
    <script src="js/manage_products.js"></script>
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
                <h1><i class="fa-solid fa-box-open fa-2xl"></i> Manage Products</h1>
                <!-- Search and Category Filter -->
                <div class="d-flex mb-3 mt-5">
                    <input type="text" id="search" class="form-control w-50 me-2" placeholder="Search for products" 
                        value="<?php echo htmlspecialchars($searchTerm); ?>">
                    <select id="categoryFilter" class="form-select w-25">
                        <option value="">All Categories</option>
                        <option value="Meals" <?php echo ($selectedCategory == 'Meals') ? 'selected' : ''; ?>>Meals</option>
                        <option value="Drinks" <?php echo ($selectedCategory == 'Drinks') ? 'selected' : ''; ?>>Drinks</option>
                        <option value="Snacks" <?php echo ($selectedCategory == 'Snacks') ? 'selected' : ''; ?>>Snacks</option>
                    </select>
                </div>

                <button class="btn btn-add mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">+ Add Product</button>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center"> Price</th>
                                <th class="text-center"> Category</th>
                                <th class="text-center"> Available</th>
                                <th class="text-center"> Actions</th>
                            </tr>
                        </thead>
                        <tbody id="productTable">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td class="text-center">Php <?php echo number_format($row['price'], 2); ?></td>
                                <td class="text-center"><?php echo $row['category']; ?></td>
                                <td class="text-center">
                                    <?php if ($row['available']): ?>
                                        <i class="fas fa-check-circle text-success"></i>
                                    <?php else: ?>
                                        <i class="fas fa-times-circle text-danger"></i>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <button 
                                        class="btn btn-sm btn-outline-primary editBtn" 
                                        data-id="<?= $row['id']; ?>"
                                        data-name="<?= htmlspecialchars($row['name']); ?>"
                                        data-price="<?= $row['price']; ?>"
                                        data-category="<?= $row['category']; ?>"
                                        data-available="<?= $row['available']; ?>"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editProductModal"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <form action="delete_product.php" method="POST" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?');">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <form action="edit_product.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel"><i class="fa-solid fa-pen"></i> Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-grid">
                            <div class="input-box">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="edit-name" required>
                            </div>
                            <div class="input-box">
                                <label for="productPrice">Price (PHP)</label>
                                <input type="number" class="form-control" name="price" id="edit-price" step="0.01" required>
                            </div>
                            <div class="input-box">
                                <label for="category">Category</label>
                                <select class="form-select" name="category" id="edit-category" required>
                                    <option value="Meals">Meals</option>
                                    <option value="Drinks">Drinks</option>
                                    <option value="Snacks">Snacks</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="availability">Availability</label>
                                <select class="form-select" name="availability" id="edit-availability" required>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update_product" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <form action="add_product.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel"><i class="fa-solid fa-plus"></i> Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-grid">
                            <div class="input-box">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" name="product_name" required>
                            </div>
                            <div class="input-box">
                                <label for="productPrice">Price (PHP)</label>
                                <input type="number" class="form-control" name="price" step="0.01" required>
                            </div>
                            <div class="input-box">
                                <label for="category">Category</label>
                                <select class="form-select" name="category" required>
                                    <option value="Meals">Meals</option>
                                    <option value="Drinks">Drinks</option>
                                    <option value="Snacks">Snacks</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="availability">Availability</label>
                                <select class="form-select" name="availability" required>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="productImage">Product Image</label>
                                <input type="file" class="form-control" name="product_image" accept="image/*" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
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


        //EDIT PRODUCT
        document.querySelectorAll('.editBtn').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('edit-id').value = this.dataset.id;
                document.getElementById('edit-name').value = this.dataset.name;
                document.getElementById('edit-price').value = this.dataset.price;
                document.getElementById('edit-category').value = this.dataset.category;
                document.getElementById('edit-availability').value = this.dataset.available;
            });
        });


       
         // Get the search and category elements
            const searchInput = document.getElementById('search');
            const categoryFilter = document.getElementById('categoryFilter');

            function filterProducts() {
                let searchQuery = searchInput.value;
                let categoryQuery = categoryFilter.value;

                let url = new URL(window.location.href);
                url.searchParams.set('search', searchQuery);
                if (categoryQuery) {
                    url.searchParams.set('category', categoryQuery);
                } else {
                    url.searchParams.delete('category');
                }

                window.location.href = url.toString();
            }

            searchInput.addEventListener('input', filterProducts);
            categoryFilter.addEventListener('change', filterProducts);
    </script>
</body>
</html>