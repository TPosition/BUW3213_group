<?php
// Include config file
include_once('../../config.php');


//After confirm the booking we need:
// update the confimed status to room_booked table
// insert the payment detail to payment table
// update the status "Not Free" to room table

// Processing form data when form is submitted
if (isset($_POST["booking_id"])) {

    $booking_id = $_POST["booking_id"];
    $booking_status = $_POST["booking_status"];

    $book_username = $_POST["booking_username"];
    $book_name = $_POST["booking_name"];
    $book_checkin = $_POST["booking_checkin"];
    $book_checkout = $_POST["booking_checkout"];
    $book_total = "200";

    $room_id = $_POST['room_id'];
    $room_status = "Not Free";



    // Check the status
    if (!empty($booking_status)) {

        $sql_room_booked = "UPDATE room_booked SET status=? WHERE id=?";

        if ($stmt_one = mysqli_prepare($link, $sql_room_booked)) {

            mysqli_stmt_bind_param($stmt_one, "si", $param_status, $param_id);

            // Set parameters
            $param_status = $booking_status;
            $param_id =  $booking_id;


            // Check the status, if status is confirmed update the room and payment table
            if ($booking_status == 'Confirmed') {

                // Prepare an update and insert statement for room_booked and payment database
                $sql_room = "UPDATE room SET status=?, booked_by_username=? WHERE id=?";
                $sql_payment = "INSERT INTO payment (username, name, room_booked_id ,check_in, check_out, grand_total ) VALUES (?, ?, ?, ?, ?, ?)";


                if ($stmt_two = mysqli_prepare($link, $sql_payment)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt_two, "ssssss", $param_username, $param_name, $param_id, $param_checkin, $param_checkout, $param_total);

                    $param_name =  $book_name;
                    $param_username =  $book_username;
                    $param_checkin =  $book_checkin;
                    $param_checkout =  $book_checkout;
                    $param_total =  $book_total;
                    $param_id =  $booking_id;


                    if ($stmt_three = mysqli_prepare($link, $sql_room)) {
                        // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt_three, "ssi", $param_room_status,  $param_username, $param_room_id);

                        // Set parameters
                        $param_room_status = $room_status;
                        $param_username =  $book_username;
                        $param_room_id =  $room_id;

                        // Attempt to execute the prepared statement
                        if (mysqli_stmt_execute($stmt_three) && mysqli_stmt_execute($stmt_two)) {

                            // Records updated successfully. 
                            header("location: index.php");
                            exit();
                        } else {
                            echo "Something went wrong. Please try again later.";
                        }
                        //Close statement three
                        mysqli_stmt_close($stmt_three);
                    }
                    //Close statement two
                    mysqli_stmt_close($stmt_two);
                }

                // if statement one execute successful 
            } else if (mysqli_stmt_execute($stmt_one)) {
                header("location: index.php");
                exit();
            }
            //Close statement one 
            mysqli_stmt_close($stmt_one);
        }


        // Close connection
        mysqli_close($link);
    }
}
