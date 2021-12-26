<?php

include_once('../config.php');

// Process delete operation after confirmation
if (isset($_POST["id"]) && !empty($_POST["id"]) && isset($_POST["table_name"])) {


    $database_table = ($_POST["table_name"]);
    // Prepare a delete statement
    $sql = "DELETE FROM $database_table WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_POST["id"]);




        

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records deleted successfully. Redirect to landing page
            header("location: ../view/$database_table/index.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>

    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <h2>Delete Record !</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                <input type="hidden" class="form-control" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                                <input type="hidden" class="form-control" name="table_name" value="<?php echo trim($_GET["table_name"]); ?>" />

                                <p class="alert-heading">Are you sure you want to delete this record?</p><br>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-danger me-2">Yes</button>
                                <a href="../view/<?php echo trim($_GET["table_name"]); ?>/index.php" class="btn btn-secondary">No</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>