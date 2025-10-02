<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <span class="bg-animate">
        </span>
        <span class="bg-animate2">
        </span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:29;">Login</h2>
            <form method="post" action="register.php">
                <div class="input-box animation" style="--i:1; --j:30;">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:31;">
                    <input type="password" name="password" id="password"required>
                    <label for="password">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" value="Login" name="login" style="--i:3; --j:32;">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:33;">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
                <p class="logreg-link animation recover" style="--i:4; --j:33;"><a href="#">Forgot password?</a></p>
            </form>
        </div>
        
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:29;">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:30;">Join the Champions' team of money.</p>
        </div>

        <div class="form-box register">
            <h2 class="animation" style="--i:23; --j:0;">Sign Up</h2>
            <form method="post" action="register.php">
                <div class="input-box animation" style="--i:24; --j:1;" >
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:25; --j:2;">
                    <input type="email" name="email" id="email" required>
                    <label for="email">E-mail</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--i:26; --j:3;">
                    <input type="password" name="password" id="password"required>
                    <label for="password">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" value="Sign Up" name="signup" style="--i:27; --j:4;">Sign Up</button>
                <div class="logreg-link animation" style="--i:28; --j:5;">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:24; --j:0;">Welcome!</h2>
            <p class="animation" style="--i:25; --j:1;">Join the Champions' team of money.</p>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>