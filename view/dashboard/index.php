<?php
include_once('../../config.php');
include_once('../../action/check_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Dashboard</title>
    <style>
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
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