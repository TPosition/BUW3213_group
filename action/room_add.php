<?php
// Include config file
include_once('../../config.php');



// Processing form data when form is submitted
if (isset($_POST["room_type"]) && isset($_POST["bedding"]) && isset($_POST["price"])) {

    $room_type = $_POST["room_type"];
    $bedding = $_POST["bedding"];
    $price = $_POST["price"];


    $username = 'Null';
    $status = "Free";

    // Check input errors before inserting in database
    if (!empty($room_type) && !empty($bedding) && !empty($price)) {
        // Prepare an insert statement
        $sql = "INSERT INTO room (room_type, bedding, booked_by_username, price, status ) VALUES (?, ?, ?, ?, ?)";


        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_room_type, $param_bedding, $param_username, $param_price, $param_status);

            // Set parameters
            $param_room_type = $room_type;
            $param_bedding =  $bedding;
            $param_username = $username;
            $param_price = $price;
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
