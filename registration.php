<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Mr. Squidee</title>
    <link rel="stylesheet" href="css/login-styles.css">
    <style>
        /* Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .wrapper {
            width: 70%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 10px 10px 20px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 100%;
            max-width: 2500px;
            background: white;
            padding: 30px;
            border-radius: 25px;
        }

        .container img {
            display: block;
            margin: 0 auto 20px;
            width: 100px;
        }

        /* Grid Layout for 3 Columns */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .input-box {
            display: flex;
            flex-direction: column;
        }

        .input-box input, 
        .input-box select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Submit Button */
        .button-container {
            grid-column: span 3;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .gradient-btn {
            width: 50%;
            padding: 12px;
            font-size: 18px;
            color: white;
            background: linear-gradient(to right, rgb(251, 213, 41), rgb(238, 145, 15));
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .gradient-btn:hover {
            background: linear-gradient(45deg, #ff6a00, #ff2400);
        }

        /* Responsive Design */
        @media screen and (max-width: 900px) {
            .form-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <form action="register.php" method="POST">
                <img src="images/mr.squidee_image.jpg" alt="Mr. Squidee Logo">

                <div class="form-grid">
                    <div class="input-box">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" required>
                    </div>

                    <div class="input-box">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
                    </div>

                    <div class="input-box">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                    </div>

                    <div class="input-box">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>

                    <div class="input-box">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" placeholder="Enter Age" required>
                    </div>

                    <div class="input-box">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Valid Email Account</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="input-box">
                        <label for="sex">Sex</label>
                        <select id="sex" name="sex" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter Username" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    </div>

                    <div class="input-box">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                    </div>

                    <div class="button-container">
                        <p id="error-message" style="color: red; display: none;"></p>
                        <button type="submit" class="gradient-btn">Register</button>
                    </div>
                </div>
            </form>

            <p style="text-align: center;">Already have an account? <a href="login_page.php">Login here</a></p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const params = new URLSearchParams(window.location.search);
            const errorMessage = document.getElementById("error-message");

            if (params.has("error")) {
                errorMessage.textContent = params.get("error");
                errorMessage.style.display = "block";
            }

            // Clear error on refresh
            if (params.has("error")) {
                const newUrl = window.location.pathname;
                window.history.replaceState({}, document.title, newUrl);
            }
        });
    </script>
</body>
</html>
