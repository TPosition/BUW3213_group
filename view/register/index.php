<?php
include_once('../../config.php');


include_once('../../action/validate_register.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Register | Genibenix</title>
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
                            <h4 class="card-title">Register</h4>
                            <form method="POST" class="my-login-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <label for="email">Username</label>
                                    <input id="username" type="username" class="form-control" name="username" value="<?php echo $username; ?>" required autofocus>
                                    <span class="help-block"><?php echo $username_err; ?></span>
                                </div>
                                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                                    <span class="help-block"><?php echo $email_err; ?></span>
                                </div>
                                <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="number" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
                                    <span class="help-block"><?php echo $phone_err; ?></span>
                                </div>

                                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <label for="password">Password
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" value="<?php echo $password; ?>" required data-eye>
                                    <span class="help-block"><?php echo $password_err; ?></span>
                                </div>
                                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                    <label for="password">Confirm Password
                                    </label>
                                    <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="<?php echo $confirm_password; ?>" required data-eye>
                                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                </div>

                                <input type="hidden" id="role" name="role" value="user">

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Resgiter
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Have an account? <a href="../login/index.php"> Login!</a>
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