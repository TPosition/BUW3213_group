<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$room_type = $bedding = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $room_type = $_POST["room_type"];
    $bedding = $_POST["bedding"];
    $username = null;
    $status = null;

    // Check input errors before inserting in database
    if (!empty($room_type) && !empty($bedding)) {
        // Prepare an insert statement
        $sql = "INSERT INTO room (room_type, bedding, username,status ) VALUES (?, ?, ?, ?)";


        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_room_type, $param_bedding, $param_username, $param_status);

            // Set parameters
            $param_room_type = $room_type;
            $param_bedding =  $bedding;
            $param_username = $username;
            $param_status = $status;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {

                echo "Something went wrong. Please try again later.";
            }
        } else {

            // Close statement
            mysqli_stmt_close($stmt);
        }
    } else {

        // Close connection
        mysqli_close($link);
    }
}
