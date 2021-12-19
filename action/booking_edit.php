<?php
// Include config file
include_once('../../config.php');



// Processing form data when form is submitted
if (isset($_POST["booking_id"])) {

    $rbook_id = $_POST["booking_id"];
    $rbook_name = $_POST["booking_name"];
    $rbook_username = $_POST["booking_username"];
    $rbook_email = $_POST["booking_email"];
    $rbook_phone = $_POST["booking_phone"];
    $room_id = $_POST["booking_roomid"];
    $rbook_meal = $_POST["booking_meal"];
    $rbook_checkin = $_POST["booking_checkin"];
    $rbook_checkout = $_POST["booking_checkout"];



    // Check input errors before inserting in database
    if (!empty($rbook_username) && !empty($rbook_name) && !empty($rbook_email) && !empty($rbook_phone) && !empty($room_id) && !empty($rbook_meal) && !empty($rbook_checkin) && !empty($rbook_checkout)) {
        // Prepare an update statement
        $sql = "UPDATE room_booked SET username=?, name=?, email=?, phone=?, room_id=?, meal=? , check_in=?, check_out=? WHERE id=?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssi", $param_username, $param_name, $param_email, $param_phone, $param_room_id,  $param_meal, $param_checkin, $param_checkout, $param_id);

            // Set parameters
            $param_room_id = $room_id;
            $param_name =  $rbook_name;
            $param_username =  $rbook_username;
            $param_email = $rbook_email;
            $param_phone = $rbook_phone;
            $param_meal = $rbook_meal;
            $param_checkin = $rbook_checkin;
            $param_checkout = $rbook_checkout;
            $param_id =  $rbook_id;

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
