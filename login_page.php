<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Squidee Login</title>
    <link rel="stylesheet" href="css/login-styles.css">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
        .input-box input.error {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <img src="images/mr.squidee_image.jpg" alt="">

            <div class="input-box">
                <input type="text" name="username" placeholder="Username" id="username" required>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>

            <!-- Error message -->
            <p id="error-message" class="error-message"></p>

            <button type="submit" class="gradient-btn">Login</button>
        </form>
        <br>
        <p>Register <a href="registration.php">here</a></p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const params = new URLSearchParams(window.location.search);
            const errorMessageElement = document.getElementById("error-message");
            const usernameInput = document.getElementById("username");
            const passwordInput = document.getElementById("password");
    
            if (params.has("error")) {
                errorMessageElement.textContent = params.get("error");
                errorMessageElement.style.display = "block";
                usernameInput.classList.add("error");
                passwordInput.classList.add("error");
            }
    
            // Remove error styles when user starts typing
            [usernameInput, passwordInput].forEach(input => {
                input.addEventListener("input", () => {
                    errorMessageElement.style.display = "none";
                    usernameInput.classList.remove("error");
                    passwordInput.classList.remove("error");
                });
            });
    
            // Clear error on refresh by updating URL
            if (params.has("error")) {
                const newUrl = window.location.pathname;
                window.history.replaceState({}, document.title, newUrl);
            }
        });
    </script>
    
</body>
</html>
