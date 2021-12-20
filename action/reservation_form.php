<?php
// Prepare a select statement (for free room to input in <select> options)
$sql_room = "SELECT DISTINCT(room_type) FROM `room` WHERE status='free'";
$result_room = mysqli_query($link, $sql_room);
$sql_bed = "SELECT DISTINCT(bedding) FROM `room` WHERE status='free'";
$result_bed = mysqli_query($link, $sql_bed);


// Define variables and initialize with empty values
$username = $name = $email = $phone  = $bedding = $meal = $check_in_date = $check_out_date = "";
$email_err = $phone_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_session["username"];
    $name = trim($_POST["inputName"]);

    // Validate email address
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter a email addresss.";
    } else if (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email address";
    } else {
        $email = trim($_POST["inputEmail"]);
    }

    // Validate phone number
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Please enter a phone number.";
    } else if (strlen(trim($_POST["phone"])) <= 10) {
        $phone_err = "Invalid phone number";
    } else {
        $phone = trim($_POST["inputPhoneNo"]);
    }

    $bedding = trim($_POST["inputBedding"]);
    $meal = trim($_POST["inputMeal"]);
    $check_in_date = trim($_POST["inputCheckIn"]);
    $check_out_date = trim($_POST["inputCheckOut"]);
    $date =  date('Y-m-d H:i:s');
    $status = 'Not Confirmed';
}
