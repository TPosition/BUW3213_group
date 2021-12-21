<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row mb-5">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="bi bi-journal-plus  ml-2"></i>
                    </div>
                    <p class="mr-5 fw-bold">
                        <!-- display the total number of reservation -->
                        <?php
                        $sql = "SELECT count(1)  FROM room_booked WHERE status='Not Confirmed'";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result);
                        $total = $row[0];
                        echo $total;
                        ?>
                        Reservations
                    </p>
                </div>
                <div class="card-footer text-white  clearfix small z-1"></div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="bi bi-person-circle ml-2"></i>
                    </div>
                    <p class="mr-5 fw-bold">
                        <!-- display the total number of customer -->
                        <?php
                        $sql = "SELECT count(1)  FROM user WHERE role='user'";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result);
                        $total = $row[0];
                        echo $total;
                        ?>
                        Customers
                    </p>
                </div>
                <div class="card-footer text-white clearfix small z-1"></div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <p class="mr-5 fw-bold">
                        <!-- display the total number of confirmed reservations -->
                        <?php
                        $sql = "SELECT count(1)  FROM room_booked WHERE status='Confirmed'";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result);
                        $total = $row[0];
                        echo $total;
                        ?>

                        Confirmed Reservations
                    </p>
                </div>
                <div class="card-footer text-white clearfix small z-1"></div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="bi bi-house-door"></i>
                    </div>
                    <p class="mr-5 fw-bold">
                        <!-- display the total number of Room -->
                        <?php
                        $sql = "SELECT count(1)  FROM room";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result);
                        $total = $row[0];
                        echo $total;
                        ?>
                        Room
                    </p>
                </div>
                <div class="card-footer text-white clearfix small z-1"></div>
            </div>
        </div>
    </div>


    <div class="mb-3 ">
        <h2 class="pull-left">Reservation</h2>

    </div>
    <?php

    // Attempt select query execution for not confirmed status
    $sql = "SELECT * FROM room_booked WHERE status = 'Not Confirmed'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            echo " <table cellpadding='0' cellspacing='0' class='table table-striped table-bordered'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>No.</th>";
            echo "<th>Username</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Phone No</th>";
            echo "<th>Room type</th>";
            echo "<th>Bedding</th>";
            echo "<th>Meal</th>";
            echo "<th>Check In</th>";
            echo "<th>Check Out</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_array($result)) {
                //assign the value for show in the table and pass to the edit.
                $book_id =   $row['id'];
                $book_roomid = $row['room_id'];
                $book_username = $row['username'];
                $book_name = $row['name'];
                $book_email = $row['email'];
                $book_phone = $row['phone'];
                $book_meal = $row['meal'];
                $book_checkin = $row['check_in'];
                $book_checkout = $row['check_out'];
                $book_status = $row['status'];
                echo "<tr>";
                echo "<td>$book_id </td>";
                echo "<td>$book_username </td>";
                echo "<td>$book_name</td>";
                echo "<td>$book_email</td>";
                echo "<td>$book_phone</td>";
                if ($book_roomid) {
                    // based on room_id to display the roomtype and bedding value
                    $sql = "SELECT room_type, bedding  FROM room WHERE id = $book_roomid";

                    $res = mysqli_query($link, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {

                            $book_roomtype = $row['room_type'];
                            $book_bedding = $row['bedding'];


                            echo "<td>$book_roomtype</td>";
                            echo "<td>$book_bedding</td>";
                        }
                    }
                }

                echo "<td>$book_meal</td>";
                echo "<td>$book_checkin</td>";
                echo "<td>$book_checkout</td>";
                echo "<td>";
                echo "<a data-bs-toggle='modal' data-bs-target='#actionModel$book_id' class='btn btn-primary fw-bold'><i class='bi bi-pencil-square'></i>&nbsp; Action</a>";
                echo "</td>";
                echo "</tr>";

                echo include('reservation.php');
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



</main>