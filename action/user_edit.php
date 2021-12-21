<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$user_id =  $user_role =  $user_username =  $user_password = "";


// Processing form data when form is submitted
if (isset($_POST["id"])) {

    $user_id = $_POST["id"];
    $user_role = $_POST["role"];
    $user_username = $_POST["username"];
    $user_password = $_POST["current_password"];


    // reassign the user password variable if password got change
    if (isset($_POST["new_password"])) {
        $user_password = $_POST["new_password"];
    }



    if ($user_role == 'admin' && !empty($user_password)) {
        $sql = "UPDATE user SET username=?, password=? WHERE id=?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssi", $param_username, $param_password, $param_id);

            // Set parameters
            $param_username =  $user_username;
            $param_password =  password_hash($user_password, PASSWORD_DEFAULT);
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
    } else if (!empty($user_password)) {

        $user_phone = $_POST["phone"];
        $user_email =  $_POST["email"];


        $sql = "UPDATE user SET username=?, phone=?, email=?, password=?  WHERE id=?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_username,   $param_phone, $param_email, $param_password, $param_id);

            // Set parameters
            $param_username = $user_username;
            $param_email =  $user_email;
            $param_phone =  $user_phone;
            $param_password =  password_hash($user_password, PASSWORD_DEFAULT);
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
        header("location: index.php");
        // Close connection
        mysqli_close($link);
    }
}
