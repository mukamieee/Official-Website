<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            // Function to validate email structure
            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            // Function to validate human name with acceptable characters
            function validateName(name) {
                const nameRegex = /^[a-zA-Z\s\-']+$/;
                return nameRegex.test(name);
            }

            form.addEventListener('submit', function(event) {
                const email = document.getElementById('email').value;
                const name = document.getElementById('name').value;
                let isValid = true;
                let errorMessage = "";

                // Validate email
                if (!validateEmail(email)) {
                    isValid = false;
                    errorMessage += "Please enter a valid email address.\n";
                }

                // Validate name
                if (!validateName(name)) {
                    isValid = false;
                    errorMessage += "Please enter a valid name. Only letters, spaces, hyphens, and apostrophes are allowed.\n";
                }

                // If there are validation errors, prevent form submission and show alert
                if (!isValid) {
                    alert(errorMessage);
                    event.preventDefault(); // Prevent form submission
                }
            });
        });
    </script>

</head>
<body>
<?php require_once ("includes/connection.php");?>
    <h1>Sign In to Sha's Adornments</h1>
    <form action="signin_process.php" method="post">
        <!-- Sign-In Section -->
        <fieldset>
            <legend>Sign In</legend>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
        </fieldset>
        
        <input type="submit" value="Sign In">
</body>
</html>