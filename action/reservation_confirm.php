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
    $book_meal = $_POST["booking_meal"];
    $book_checkin = $_POST["booking_checkin"];
    $book_checkout = $_POST["booking_checkout"];


    $room_id = $_POST['room_id'];
    $room_status = "Not Free";



    // Check the status
    if (!empty($booking_status)) {
        // Change the status of booking 
        $sql_room_booked = "UPDATE room_booked SET status=? WHERE id=?";

        if ($stmt_one = mysqli_prepare($link, $sql_room_booked)) {

            mysqli_stmt_bind_param($stmt_one, "si", $param_status, $param_id);

            // Set parameters
            $param_status = $booking_status;
            $param_id =  $booking_id;
            // Execute the statement one 
            mysqli_stmt_execute($stmt_one);


            // Check the status, if status is confirmed update the room and payment table
            if ($booking_status == 'Confirmed') {

                // To get the price of room
                $sql_room_price = "SELECT * FROM room WHERE id = '$room_id'";
                $result_room_price = mysqli_query($link, $sql_room_price);

                if (mysqli_num_rows($result_room_price) > 0) {

                    while ($row = mysqli_fetch_assoc($result_room_price)) {

                        $room_price = $row['price'];
                    }
                }
                // End get room price


                // To get the price of meal
                $sql_meal_price = "SELECT * FROM meal WHERE meal_name = '$book_meal'";
                $result_meal_price = mysqli_query($link, $sql_meal_price);

                if (mysqli_num_rows($result_meal_price) > 0) {

                    while ($row = mysqli_fetch_assoc($result_meal_price)) {

                        $meal_price = $row['price'];
                    }
                }
                // End get meal price



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
                    $param_total =  $room_price + $meal_price;
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
            }

            header("location: index.php");
            exit();

            //Close statement one 
            mysqli_stmt_close($stmt_one);
        }


        // Close connection
        mysqli_close($link);
    }
}
