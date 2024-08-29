<?php
//session_start();
// if (isset($_SESSION['Email_Session'])) {
//     header("Location: welcome.php");
//     die();
// }
// include('config.php');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <style>
        .alert {
            padding: 1rem;
            border-radius: 5px;
            color: white;
            margin: 1rem 0;
            font-weight: 500;
            width: 65%;
        }

        .alert-success {
            background-color: #42ba96;
        }

        .alert-danger {
            background-color: #fc5555;
        }

        .alert-info {
            background-color: #2E9AFE;
        }

        .alert-warning {
            background-color: #ff9966;
        }
    </style>
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>           
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Username" placeholder="Username"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email"/>
                    </div>
                    <div class="input-field" >
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf-Password" placeholder="Confirm Password" />
                    </div>
                    <button type="button" onclick="location.href='../login/index.php'" class="btn solid">Sign up</button>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                    Gabung dengan CanegaNet! Daftar sekarang untuk mulai menikmati akses internet cepat dan andal. Bergabunglah dengan komunitas kami hari ini!
                    </p>
                    <a href="index.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none">
                        Sign in
                                                                                </a>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    </div>
</body>

</html>
