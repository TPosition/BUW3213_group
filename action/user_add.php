<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$username = $phone = $email = $password = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_role = $_POST["role"];


    if ($user_role == 'admin') {

        $username = $_POST["admin_username"];
        $password = $_POST["admin_password"];


        // begin to check username is not taken in database
        $sql = "SELECT id FROM user WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["admin_username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    echo "<script>alert('This username is already taken');  
                    window.location='index.php'</script>";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
        // end of check


        if (!empty($username) && !empty($password)) {

            $sql = "INSERT INTO user (username, password, role ) VALUES (?, ?, ?)";


            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sss",  $param_username, $param_password, $param_role);

                // Set parameters
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                $param_role = $user_role;


                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    // Records created successfully. Redirect to landing page
                    header("location: index.php");
                    exit();
                } else {

                    echo "Something went wrong. Please try again later.";
                }
            }

            // Close statement
            mysqli_stmt_close($stmt);
        } else {
            mysqli_close($link);
            header("location: index.php");
            exit();
        }
    } else {

        $username = $_POST["user_username"];
        $password = $_POST["user_password"];
        $email = $_POST["user_email"];
        $phone = $_POST["user_phone"];

        // begin to check username is not taken in database
        $sql = "SELECT id FROM user WHERE username = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["user_username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    echo "<script>alert('This username is already taken');  
                       window.location='index.php'</script>";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
        // end of check


        if (!empty($username) && !empty($password) && !empty($email) && !empty($phone)) {
            $sql = "INSERT INTO user (username, password, email, phone, role ) VALUES (?, ?, ?, ?, ?)";


            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sssss",  $param_username, $param_password, $param_email, $param_phone, $param_role);

                // Set parameters
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                $param_email = $email;
                $param_phone = $phone;
                $param_role = $user_role;


                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    // Records created successfully. Redirect to landing page
                    header("location: index.php");
                    exit();
                } else {

                    echo "Something went wrong. Please try again later.";
                }
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        // Close connection
        else {
            mysqli_close($link);
            header("location: index.php");
            exit();
        }
    }
}
