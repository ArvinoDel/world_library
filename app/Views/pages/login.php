<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | WorldLibrary</title>
    <link rel="shortcut icon" href="<?= base_url('img/logo-perpus.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('css/style3.css') ?>">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="<?= base_url('/register') ?>" method="POST">
                <h1>Register Here</h1>
                <input type="text" placeholder="Name" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="file" name="file" required>
                <button type="submit">Register</button>
                <span>© 2024 WorldLibrary</span>
            </form>
        </div>
        <div class="form-container login-container">
            <form action='<?= base_url('/login') ?>' method="POST">
                <h1>Login Here</h1>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label>Remember Me</label>
                    </div>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
                <span>© 2024 WorldLibrary</span>
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

<script>
        document.addEventListener('DOMContentLoaded', () => {
            const successMessage = '<?= session()->getFlashdata('success'); ?>';
            const errorMessage = '<?= session()->getFlashdata('error'); ?>';
            let validationErrors = '<?= session()->getFlashdata('errors'); ?>';

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: successMessage
                });
            }

            if (errorMessage) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: errorMessage
                });
            }

            if (validationErrors) {
                let errors = '';
                try {
                    errors = JSON.parse(validationErrors);
                    let errorMessages = '';
                    for (const field in errors) {
                        errorMessages += `${field}: ${errors[field]}\n`;
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Errors',
                        html: errorMessages
                    });
                } catch (e) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: validationErrors
                    });
                }
            }

            <?php
                session()->remove('success');
                session()->remove('error');
                session()->remove('errors'); 
            ?>

            const loginForm = document.getElementById('loginForm');

            loginForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const formData = new FormData(loginForm);
                fetch(loginForm.action, {
                    method: loginForm.method,
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok.');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.errors) {
                        let errorMessages = '';
                        for (const field in data.errors) {
                            errorMessages += `${field}: ${data.errors[field]}\n`;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Errors',
                            html: errorMessages
                        });
                    } else if (data.error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: data.error
                        });
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message
                        }).then(() => {
                            window.location.href = '/pages';
                        });
                    }
                })
                .catch(error => {
                    console.error('Fetch Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan saat memproses permintaan.'
                    });
                });
            });
        }); 
    </script>


</body>

</html>