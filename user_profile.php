<?php
session_start();
include "db.php";

// If user is not logged in, redirect to login page
if (!isset($_SESSION["username"])) {
    header("Location: login_page.php");
    exit();
}

// Get current user's full name from session
$currentUser = $_SESSION["first_name"] . " " . $_SESSION["last_name"];

// Fetch all registered users
$sql = "SELECT id, username, first_name, middle_name, last_name, email, contact_number, dob, age, sex FROM users ORDER BY id ASC";
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
    <link rel="stylesheet" href="css/user-profile-styles.css">
    <link rel="stylesheet" href="css/logout.css">
    <script src="js/manage_products.js"></script>
    <title>User Profiles</title>
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
                <h1 style="margin-bottom: 50px;"><i class="fa-solid fa-user-gear fa-2xl"></i> User Profiles</h1>
                <form action="registration.php">
                    <button class="btn btn-add mb-3" id="registerButton">Register New User</button>
                </form>

                <h3 id="nameOfUser" style="margin-bottom: 30px;">Current User: <?php echo htmlspecialchars($currentUser); ?></h3>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="productTable">
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td class="text-center"><?php echo "00".$row["id"]; ?></td>
                                <td class="text-center"><?php echo htmlspecialchars($row["username"]); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars($row["first_name"] . " " . $row["last_name"]); ?></td>
                                <td class="text-center">
                                <button 
                                    class="btn btn-sm btn-outline-primary view-details-btn" 
                                    data-bs-toggle="modal" 
                                    title="View User Info"
                                    data-bs-target="#viewDetailsModal"
                                    data-id="<?= $row['id']; ?>"
                                    data-username="<?= htmlspecialchars($row['username']); ?>"
                                    data-first="<?= htmlspecialchars($row['first_name']); ?>"
                                    data-middle="<?= htmlspecialchars($row['middle_name']); ?>"
                                    data-last="<?= htmlspecialchars($row['last_name']); ?>"
                                    data-email="<?= htmlspecialchars($row['email']); ?>"
                                    data-contact="<?= htmlspecialchars($row['contact_number']); ?>"
                                    data-dob="<?= htmlspecialchars($row['dob']); ?>"
                                    data-age="<?= htmlspecialchars($row['age']); ?>"
                                    data-sex="<?= htmlspecialchars($row['sex']); ?>"
                                >
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button 
                                    class="btn btn-sm btn-outline-danger delete-user-btn"
                                    data-bs-toggle="modal"
                                    title="Delete User"
                                    data-bs-target="#confirmDeleteModal"
                                    data-userid="<?= $row['id']; ?>"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- View Details Modal -->
    <div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-grid">
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" class="form-control" id="viewFirstName" disabled>
                </div>
                <div class="input-box">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" id="viewMiddleName" disabled>
                </div>
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="viewLastName" disabled>
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" class="form-control" id="viewEmail" disabled>
                </div>
                <div class="input-box">
                    <label>Username</label>
                    <input type="text" class="form-control" id="viewUsername" disabled>
                </div>
                <div class="input-box">
                    <label>Contact</label>
                    <input type="text" class="form-control" id="viewContact" disabled>
                </div>
                <div class="input-box">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" id="viewDob" disabled>
                </div>
                <div class="input-box">
                    <label>Age</label>
                    <input type="number" class="form-control" id="viewAge" disabled>
                </div>
                <div class="input-box">
                    <label>Sex</label>
                    <input type="text" class="form-control" id="viewSex" disabled>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Confirm Delete Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this user?
            </div>
            <div class="modal-footer" style="justify-content: center; text-align: center; align-items: center;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Delete</a>
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

        document.getElementById("registerButton").addEventListener("click", function() {
            window.location.href = "register.html";
        });


        //EDIT MODAL
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.view-details-btn').forEach(button => {
                button.addEventListener('click', () => {
                document.getElementById('viewFirstName').value = button.dataset.first;
                document.getElementById('viewMiddleName').value = button.dataset.middle;
                document.getElementById('viewLastName').value = button.dataset.last;
                document.getElementById('viewEmail').value = button.dataset.email;
                document.getElementById('viewUsername').value = button.dataset.username;
                document.getElementById('viewContact').value = button.dataset.contact;
                document.getElementById('viewDob').value = button.dataset.dob;
                document.getElementById('viewAge').value = button.dataset.age;
                document.getElementById('viewSex').value = button.dataset.sex;
                });
            });
        });

        //DELETE USER
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('.delete-user-btn');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const userId = button.getAttribute('data-userid');
                    confirmDeleteBtn.href = `delete_user.php?id=${userId}`;
                });
            });
        });


    </script>

</body>
</html>