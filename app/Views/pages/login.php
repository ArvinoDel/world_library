<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/style3.css') ?>">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="" method="POST">
                <h1>Register Here</h1>
                <input type="text" placeholder="Name" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Register</button>
                <span>Or use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
                    <a href="#" class="social"><i class="lni lni-google"></i></a>
                    <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
                </div>
            </form>
        </div>
        <div class="form-container login-container">
            <form action="" method="POST">
                <h1>Login Here</h1>
                <input type="text" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label>Remember Me</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit">Login</button>
                <span>or use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
                    <a href="#" class="social"><i class="lni lni-google"></i></a>
                    <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br> User!</h1>
                    <p>If You Have An Account, Login Here</p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Let's Read <br> Some Books!</h1>
                    <p>If You Don't Have An Account, Let's Create It!</p>
                    <button class="ghost" id="register">Register 
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const regisrationButton = document.getElementById("register");
        const loginButton = document.getElementById("login");
        const container = document.getElementById("container");

        regisrationButton.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        loginButton.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

    </script>
</body>

</html>