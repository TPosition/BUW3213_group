<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$room_id = $room_type = $bedding = "";


// Processing form data when form is submitted
if (isset($_POST["room_id"])) {

    $room_id = $_POST["room_id"];
    $status = null;
    $username = null;
    $room_type =  $_POST["room_type"];
    $bedding =  $_POST["bedding"];

    // Check input errors before inserting in database
    if (!empty($room_type) && !empty($bedding)) {
        // Prepare an update statement
        $sql = "UPDATE room SET room_type=?, bedding=?, status=?, username=? WHERE id=?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_room_type, $param_bedding, $param_username, $param_status, $param_id);

            // Set parameters
            $param_room_type = $room_type;
            $param_bedding = $bedding;
            $param_username = $username;
            $param_status = $status;
            $param_id =   $room_id;

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
    }

    // Close connection
    mysqli_close($link);
}
