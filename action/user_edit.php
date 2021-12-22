<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$user_id =  $user_role =  $user_username =  $user_password = "";


// Processing form data when form is submitted
if (isset($_POST["id"])) {
    $user_id = $_POST["id"];
    $user_role = $_POST["role"];
    $user_password = $_POST["current_password"];
    $user_username = $_POST["username"];

    // reassign the user password variable if password got change
    if (isset($_POST["new_password"])) {
        $user_password = $_POST["new_password"];
    }


    if ($user_role == 'admin' || $user_role == 'super admin' ) {
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
                // Records updated successfully. 

                echo  "<script>
                    
                             alert('Update Successful');  
                             window.location='index.php'
                    
                        </script>";
                exit();
            } else {

                echo "<script>
                    
                         alert('This username is already taken');  
                         window.location='index.php'
                     
                       </script>";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
        // Close connection
        mysqli_close($link);
    } else if ($user_role == 'user') {
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
                echo  "<script>
                    
                    alert('Update Successful');  
                    window.location='index.php'
       
                </script>";
                exit();
            } else {
                echo "<script>
                    
                alert('This username is already taken');  
                window.location='index.php'
            
              </script>";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
        // Close connection
        mysqli_close($link);
    }
}
