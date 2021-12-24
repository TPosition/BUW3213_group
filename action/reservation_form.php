<?php
// Prepare a select statement (for free room to input in <select> options)
$sql_room = "SELECT DISTINCT(room_type) FROM `room` WHERE status='free'";
$result_room = mysqli_query($link, $sql_room);
$sql_bed = "SELECT DISTINCT(bedding) FROM `room` WHERE status='free'";
$result_bed = mysqli_query($link, $sql_bed);


// Define variables and initialize with empty values
$username = $name = $email = $phone  = $bedding = $meal = $check_in_date = $check_out_date = "";
$email_err = $phone_err = $checkIn_err = $checkOut_err = "";
$today = date('Y-m-d');

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Getting the username throught $_SESSION
    $username = $_SESSION["username"];

    // Get USER Input
    $name = trim($_POST["inputName"]);

    // Validate email address
    if (!filter_var(trim($_POST["inputEmail"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email address";
    } else {
        $email = trim($_POST["inputEmail"]);
    }

    $phone = trim($_POST["inputPhoneNo"]);
    $bedding = trim($_POST["inputBedding"]);
    $meal = trim($_POST["inputMeal"]);

    if ($_POST["inputCheckIn"] >= $today){
        $check_in_date = trim($_POST["inputCheckIn"]);
    } else {
        $checkIn_err = "Invalid Check In Date. The Check In Date should be today or the day after today.";
    }
    
    if ($_POST["inputCheckOut"] >= $_POST["inputCheckIn"]){
        $check_out_date = trim($_POST["inputCheckOut"]);
    } else {
        $checkOut_err = "Invalid Check Out Date. The Check Out Date should be the day after Check In Date.";
    }

    $date =  date('Y-m-d H:i:s');
    $status = 'Not Confirmed';

    if (empty($email_err) && empty($phone_err) && empty($checkIn_err) && empty($checkOut_err)) {

        // Prepare a INSERT statement to update user's input into database
        $sql = "INSERT INTO room_booked (username, name, email, phone, room_id, meal , check_in, check_out, status, timestamp ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_username, $param_name,  $param_email, $param_phone, $param_room_id,  $param_meal, $param_checkin, $param_checkout, $param_status, $param_date);

            // Set parameters
            $param_username = $username;
            $param_name =  $name;
            $param_email = $email;
            $param_phone = $phone;
            $param_room_id = $bedding;
            $param_meal = $meal;
            $param_checkin = $check_in_date;
            $param_checkout = $check_out_date;
            $param_status = $status;
            $param_date = $date;
            

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: bookinghistory.php");
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
    } 
    
}
