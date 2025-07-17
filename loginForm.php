<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    
    <div class="container" id="main">

        <div class="sign-up">
            <!-- For Sign Up -->
            <form action="sign_up.php" method="POST">
            <h1>Sign Up</h1>
            <!-- Social media sign-up options -->
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            </div>
            <p>Or Use your account</p>
            <!-- Sign-up fields -->
            <input type="text" name="txt" placeholder="Name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="paswd" placeholder="Password" required="">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required="">
            <button>Sign Up</button>
            </form>
           </div> 

       <div class="sign-in">
        <!-- For Sign In -->
        <form action="login.php" method="POST">
        <h1>Sign In</h1>
        <div class="social-container">
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        </div>
        <p>Or Use your account</p>
        <!-- Sign-in fields -->
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="paswd" placeholder="Password" required="">
        <a href="#">Forgot Your Password</a>
        <button>Sign In</button>
        </form>
       </div> 
       
       <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-left">
                <h1>Welcome to EVENTESCAPE</h1>
                <P>To keep connected with us please login with your personel info</P>
                <button id="signIn">Sign In</button>
            </div>
            <div class="overlay-right">
                <h1>WELCOME BACK TO EVENTESCAPE</h1>
                <P>Enter your personel details and escape from your event with us</P>
                <button id="signUp">Sign Up</button>
            </div>
        </div>
       </div>
    </div>
	
    <!-- JavaScript link -->
	<script src="loginscript.js"></script>

</body>
</html>