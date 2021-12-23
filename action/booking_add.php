<?php
// Include config file
include_once('../../config.php');

// Define variables and initialize with empty values
$username = $name = $email = $phone = $meal = $checkin = $checkout =  "";



//After add the booking we need:
// insert the booking detail to romm_booked table
// update the username and status to room table



// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<script>alert('here');</script>";
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $room_id = $_POST["bedding_room_id"];
    $meal = $_POST["meal"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $date =  date('Y-m-d H:i:s');
    $status = 'Confirmed';

    $room_status = "Not Free";

    // Check input errors before inserting in database
    if (!empty($username) && !empty($name) && !empty($email) && !empty($phone) && !empty($room_id) && !empty($meal) & !empty($checkin) && !empty($checkout)) {
        // Prepare an insert statement
        $sql = "INSERT INTO room_booked (username, name, email, phone, room_id, meal , check_in, check_out, status, timestamp ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sql_room = "UPDATE room SET status=?, booked_by_username=? WHERE id=?";

        if ($stmt_one = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt_one, "ssssssssss", $param_username, $param_name,  $param_email, $param_phone, $param_room_id,  $param_meal, $param_checkin, $param_checkout, $param_status, $param_date);

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

            if ($stmt_two = mysqli_prepare($link, $sql_room)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt_two, "ssi", $param_room_status,  $param_username, $param_room_id);

                // Set parameters
                $param_room_status = $room_status;
                $param_username =  $username;
                $param_room_id =  $room_id;

                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt_one) && mysqli_stmt_execute($stmt_two)) {
                    // Records created successfully. Redirect to landing page
                    header("location: index.php");
                    exit();
                } else {

                    echo "Something went wrong. Please try again later.";
                }
            }
        }

        // Close statement
        mysqli_stmt_close($stmt_one, $stmt_two);

        // Close connection
        mysqli_close($link);
    } else {
        header("location: index.php");
        exit();
    }
}
