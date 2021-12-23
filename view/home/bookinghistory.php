<?php
include_once('../../config.php');
include_once('../../action/check_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta -->
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Booking History | Genibenix</title>
    <style>
        #historyContainer {
            background-image: url("../../image/reservation_background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
        }

        html,
        body {
            min-height: 100%;
        }
    </style>
</head>

<body>
    <!-- Import Header Nav Bar -->
    <?php include_once(DIR_LAYOUT . 'user_navbar.php'); ?>

    <div id="historyContainer" class="container-fluid py-5 px-3">
        <div class=" text-center border border-primary rounded bg-light">
            <h1 class="py-3">Booking Details</h1>

            <!-- Execute the php to get the booking record -->
            <?php

            // Get the username from $_SESSION
            $username = $_SESSION["username"];

            //Prepare a SELECT statement to get the booking history based on the username
            $sql = "SELECT * FROM room_booked WHERE username = '$username'";
            $i = 1; // Make for sequential number for collasape ID
            if ($result_booking = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result_booking) > 0) {
                    echo "<div class='row px-3' id='bookingHistory'>";
                    while ($row = mysqli_fetch_array($result_booking)) {
                        $name = $row['name'];
                        $phone = $row['phone'];
                        $check_in = $row['check_in'];
                        $check_out = $row['check_out'];
                        $meal = $row['meal'];
                        $status = $row['status'];
                        $id = $row['room_id'];


                        $sql_room = "SELECT * FROM room WHERE id = '$id'";
                        $result_room = mysqli_query($link, $sql_room);
                        while ($row_room = mysqli_fetch_array($result_room)) {
                            $room = $row_room['room_type'];
                            $bedding = $row_room['bedding'];
                        }

                        echo "<div class='col-lg-6'>";
                        echo "<div class='card my-3'>";
                        echo "<div class='card-header'>";
                        echo "<a class='collapsed btn' data-bs-toggle='collapse' href='#collapse$i'>";
                        echo "<h5> $room Room</h5>";
                        echo "</a>";
                        echo "</div>";
                        echo "<div id='collapse$i' class='collapse show' data-bs-parent='#bookingHistory'>";
                        echo "<div class='card-body'>";
                        echo "<div class='row mx-auto'>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Name:</h6>";
                        echo "<p>$name</p>";
                        echo "</div>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Phone:</h6>";
                        echo "<p>$phone</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='row mx-auto'>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Check In Date:</h6>";
                        echo "<p>$check_in</p>";
                        echo "</div>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Check Out Date:</h6>";
                        echo "<p>$check_out</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='row mx-auto'>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Meals:</h6>";
                        echo "<p>$meal</p>";
                        echo "</div>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Bedding:</h6>";
                        echo "<p>$bedding Bed</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='row mx-auto'>";
                        echo "<div class='col text-start'>";
                        echo "<h6>Status:</h6>";
                        echo "<p>$status</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        $i++;
                        mysqli_free_result($result_room);
                    }
                    echo "</div>";
                    mysqli_free_result($result_booking);
                } else {
                    echo "<h3 class='p-3'>Do not have any booking? <a href='reservation.php'>Book Now!</a></h3>";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            ?>
        </div>
    </div>

    <!-- Import Footer -->
    <?php include_once(DIR_LAYOUT . 'footer.php'); ?>
    <?php include_once('resetPassword.php'); ?>
    <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
</body>

</html>