<?php
include_once('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Login | Genibenix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/login_register.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="../../image/logo.jpeg" alt="Genibenix Logo">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form method="POST" class="my-login-validation">
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="username" type="username" class="form-control" name="use" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Username is invalid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                        <a href="forgot.html" class="float-right">
                                            Forgot Password?
                                        </a>
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Don't have an account? <a href="../register/index.php"> Register!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2021 &mdash; Genibenix
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
</body>

</html>