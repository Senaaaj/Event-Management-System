<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Delete Account</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="container" id="main">
        <div class="sign-in">
            <!-- Form to delete account -->
            <form id="deleteForm" action="delete_account.php" method="POST">
                <h1>Delete Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                </div>
                <p>Enter your email and password to delete your account.</p>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <a href="#">Forgot Your Password?</a>
                <button type="submit">Delete Account</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-right">
                    <h1>Sad to lose you!</h1>
                    <p>We hope to see you again soon!</p>
                    <button id="signUp">Log In</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Confirmation dialog before deleting the account
        document.getElementById('deleteForm').addEventListener('submit', function(event) {
            var confirmation = confirm("Are you sure you want to delete your account? This action cannot be undone.");
            if (!confirmation) {
                event.preventDefault();  // Prevent the form submission if the user cancels
            }
        });

        // Redirect to login when user clicks "Log In" button
        const signUpButton = document.getElementById('signUp');
        signUpButton.addEventListener('click', () => {
            window.location.href = "loginForm.php";  // Redirect to login page
        });
    </script>
</body>
</html>