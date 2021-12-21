<?php
// Include config file
include_once('../../config.php');




// Processing form data when form is submitted
if (isset($_POST["booking_id"])) {

    $booking_id = $_POST["booking_id"];
    $booking_status = $_POST["booking_status"];


    // Check input errors before inserting in database
    if (!empty($booking_status)) {
        // Prepare an update statement
        $sql = "UPDATE room_booked SET status=? WHERE id=?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_status, $param_id);

            // Set parameters
            $param_status = $booking_status;
            $param_id =  $booking_id;

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
