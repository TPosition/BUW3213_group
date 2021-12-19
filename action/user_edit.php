<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$username = $phone = $email = "";


// Processing form data when form is submitted
if (isset($_POST["id"])) {

    $user_id = $_POST["id"];
    $user_role = $_POST["role"];
    $user_username = $_POST["username"];

    if ($user_role == 'admin') {
        $sql = "UPDATE user SET username=? WHERE id=?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_username, $param_id);

            // Set parameters
            $param_username =   $user_username;
            $param_id =  $user_id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
        // Close connection
        mysqli_close($link);
    } else {

        $user_phone = $_POST["phone"];
        $user_email =  $_POST["email"];


        $sql = "UPDATE user SET username=?, phone=?, email=?  WHERE id=?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_username,   $param_phone, $param_email,  $param_id);

            // Set parameters
            $param_username = $user_username;
            $param_email =  $user_email;
            $param_phone =  $user_phone;
            $param_id =  $user_id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
        // Close connection
        mysqli_close($link);
    }
}
