<?php
// Include config file
include_once('../../config.php');

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $new_password = ($_POST["new_password"]);

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
            echo "<script>  
                alert('Update Successful');  
                window.location='../login/index.php'
                 </script>";
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
