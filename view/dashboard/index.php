<?php
include_once('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once(DIR_LAYOUT . 'head.php'); ?>

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
    <?php include_once(DIR_LAYOUT . '/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>