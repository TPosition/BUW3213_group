<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login/index.php");
    exit;
}

// auto update the "Free" status by check the every room booking check out date 
$current_date = date("Y-m-d");

$sql_checkout =  "SELECT room_id, check_out FROM room_booked";

$result_checkout = mysqli_query($link, $sql_checkout);

if (mysqli_num_rows($result_checkout) > 0) {

    while ($row = mysqli_fetch_assoc($result_checkout)) {
        $room_id = $row['room_id'];
        $room_checkout = $row['check_out'];

        if ($room_checkout == $current_date || $room_checkout < $current_date) {

            $sql_room_status = "UPDATE room SET status = 'Free' WHERE id =  $room_id";
            mysqli_query($link, $sql_room_status);
        }
    }
}
