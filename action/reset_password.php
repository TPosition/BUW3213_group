<?php
// Include config file
include_once('../../config.php');
// include_once('../../action/check_login.php');


// Define variables and initialize with empty values
$new_password =  "";


// Processing form data when form is submitted
if (isset($_POST["new_password"])) {


    $new_password = trim($_POST["new_password"]);



    // Prepare an update statement
    $sql = "UPDATE user SET password = ? WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

        // Set parameters
        $param_password = password_hash($new_password, PASSWORD_DEFAULT);
        $param_id = $_SESSION["id"];


        if (mysqli_stmt_execute($stmt)) {
            // Password updated successfully. Destroy the session, and redirect to login page
            session_destroy();
            header("location: ../login/index.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }


    // Close connection
    mysqli_close($link);
}
