
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="mstyle.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
                </div>
                <span>Sign me up</span>
                <input type="text" placeholder="Name">
                <input type="studentid" placeholder="Student ID">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="dashboard.php" method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram-i"></i></a>
                </div>
                <span>Sign me up</span>
                <input type="studentid" placeholder="Student ID">
                <input type="password" placeholder="Password">
                <button>Sign In</button>
				<a href="index.php">Go to Admin's Panel</a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-pannel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-pannel toggle-right">
                    <h1>Hello, My Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
