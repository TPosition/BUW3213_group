<main class="col-md-9 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom my-4">
        <h1 class="h2">Payment Details</h1>
    </div>

    <div class="row m-5">


        <?php


        // Attempt select query execution
        $sql = "SELECT * FROM payment";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {

                echo " <table cellpadding='0' cellspacing='0' class='table table-striped table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>No.</th>";
                echo "<th>Username</th>";
                echo "<th>Name</th>";
                echo "<th>Room Type</th>";
                echo "<th>Bedding</th>";
                echo "<th>Check In</th>";
                echo "<th>Check Out</th>";
                echo "<th>Grand Total</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                    //assign the value for show in the table and pass to the edit.
                    $payment_id =   $row['id'];
                    $payment_room_booked_id =   $row['room_booked_id'];
                    $payment_username = $row['username'];
                    $payment_name = $row['name'];
                    $payment_checkin = $row['check_in'];
                    $payment_checkout = $row['check_out'];
                    $payment_total = $row['grand_total'];
                    echo "<tr>";
                    echo "<td>$payment_id </td>";
                    echo "<td>$payment_username</td>";
                    echo "<td>$payment_name</td>";
                    if ($payment_room_booked_id) {



                        $sql = "SELECT room_id FROM room_booked WHERE id = $payment_room_booked_id";

                        //find the room id from the room booked database
                        $res = mysqli_query($link, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $room_id = $row['room_id'];


                                $sql = "SELECT room_type,bedding  FROM room WHERE id = $room_id";
                                // find the room_type and bedding based on the room id we find.
                                $data = mysqli_query($link, $sql);
                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $payment_roomtype = $row['room_type'];
                                        $payment_bedding = $row['bedding'];

                                        echo "<td>$payment_roomtype</td>";
                                        echo "<td>$payment_bedding </td>";
                                    }
                                }
                            }
                        }
                    }
                    echo "<td>$payment_checkin</td>";
                    echo "<td>$payment_checkout</td>";
                    echo "<td>RM &nbsp;$payment_total</td>";

                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "<p class='lead'><em>No records were found.</em></p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        // Close connection
        mysqli_close($link);
        ?>
    </div>

</main>