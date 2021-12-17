<?php
include_once('../../config.php');
include_once('../../action/check_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Room</title>


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