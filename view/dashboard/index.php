<?php
include_once('../../config.php');
include_once('../../action/check_login.php');


// To double check to role must be admin when direct to admin panel
if ($_SESSION["role"] == 'admin' || $_SESSION["role"] == 'super admin') {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include_once(DIR_LAYOUT . 'head.php'); ?>
        <title>Dashboard</title>


    </head>

    <body>
        <?php include_once(DIR_LAYOUT . 'navbar.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <?php
                include_once(DIR_LAYOUT . 'sidebar.php');
                include_once('./content.php');
                ?>
            </div>
        </div>
        <?php include_once(DIR_LAYOUT . 'footer.php'); ?>
        <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
    </body>

    </html>

<?php
} else if ($_SESSION["role"] == 'user') {
    header("location: ../home/index.php");
} else {
    header("location: ../login/index.php");
}

?>