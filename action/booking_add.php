<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$username = $name = $email = $phone = $room_id = $meal = $checkin = $checkout =  "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $room_id = $_POST["room_id"];
    $meal = $_POST["meal"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $date =  date('Y-m-d H:i:s');
    $status = 'confirmed';

    // Check input errors before inserting in database
    if (!empty($username) && !empty($name) && !empty($email) && !empty($phone) && !empty($room_id) && !empty($meal) & !empty($checkin) && !empty($checkout)) {
        // Prepare an insert statement
        $sql = "INSERT INTO room_booked (username, name, email, phone, room_id, meal , check_in, check_out, status, timestamp ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_username, $param_name,  $param_email, $param_phone, $param_room_id,  $param_meal, $param_checkin, $param_checkout, $param_status, $param_date);

            // Set parameters
            $param_room_id = $room_id;
            $param_name =  $name;
            $param_username = $username;
            $param_email = $email;
            $param_phone = $phone;
            $param_meal = $meal;
            $param_checkin = $checkin;
            $param_checkout = $checkout;
            $param_date = $date;
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


        // Close connection
        mysqli_close($link);
    } else {
        header("location: index.php");
        exit();
    }
}
