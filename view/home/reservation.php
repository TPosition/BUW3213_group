<?php
include_once('../../config.php');
include_once('../../action/check_login.php');
include_once('../../action/reservation_form.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta -->
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Reservation | Genibenix</title>
    <style>
        #formContainer {
            background-image: url("../../image/reservation_background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
        }

        html,
        body {
            min-height: 100%;
        }

        .help-block {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Import Header Nav Bar -->
    <?php include_once(DIR_LAYOUT . 'user_navbar.php'); ?>

    <div id="formContainer" class="container-fluid p-5">
        <div class="container col-lg-6 p-3 border border-primary rounded bg-light">
            <div class="mb-4">
                <h1 class="text-center">Reservation</h1>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="form-group mb-3 <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                    <label for="inputName">Name:</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name" value="<?php echo $name ?>" required>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label for="inputEmail">Email Address:</label>
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email Address" value="<?php echo $email ?>" required>
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                    <label for="inputPhoneNo">Phone Number:</label>
                    <input type="text" class="form-control" id="inputPhoneNo" name="inputPhoneNo" placeholder="Your Phone Number" value="<?php echo $phone; ?>" pattern="[0-9]{10,11}" required>
                    <span class="help-block"><?php echo $phone_err; ?></span>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                    <label for="inputRoomType">Type of Room</label>
                    <select id="inputRoomType" name="inputRoomType" class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected>-- Select the room --</option>
                    </select>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                    <label for="inputBedding">Bedding</label>
                    <select id="inputBedding" name="inputBedding" class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected>-- Select the room for choosing the bedding --</option>
                    </select>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                    <label for="inputMeal">Meal</label>
                    <select id="inputMeal" name="inputMeal" class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected>-- Select the meal --</option>
                        <option value="Room">Room Only</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                        <option value="Half Board">Half Board (Breakfast + Lunch)</option>
                        <option value="Full Board">Full Board (Breakfast + Lunch + Dinner)</option>
                    </select>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                    <label for="inputCheckIn">Check In Date</label>
                    <input type="date" class="form-control" id="inputCheckIn" name="inputCheckIn" value="<?php echo $check_in_date; ?>" required>
                </div>

                <div class="form-group mb-3 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                    <label for="inputCheckOut">Check Out Date</label>
                    <input type="date" class="form-control" id="inputCheckOut" name="inputCheckOut" value="<?php echo $check_out_date; ?>" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Book Now!</button>
                </div>
            </form>

        </div>
    </div>

    <!-- Import Footer -->
    <?php include_once(DIR_LAYOUT . 'footer.php'); ?>
    <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
</body>

</html>

<script>
        "use strict"
        
        // Define an empty array to fetch FREE ROOM from database
        let room_data = [];
        <?php
        // Prepare a SELECT statement to get the FREE ROOM data
        $sql = "SELECT * FROM room WHERE id IN (SELECT min(id) FROM room WHERE status='Free' GROUP BY room_type, bedding)";
        $res = mysqli_query($link, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $room_type = $row['room_type'];
                $bedding = $row['bedding'];
                $room_id = $row['id'];
                $status =  $row['status'];
                echo "room_data.push({room_id: '$room_id', room_type: '$room_type',bedding:'$bedding',status:'$status' });\n";
            }
        }
        ?>
        const inputRoomType = document.getElementById('inputRoomType');
        room_data.map(item => {
            let option = document.createElement("option");
            option.innerText = item.room_type;
            option.value = item.room_type;
            option.id = item.room_type;
            inputRoomType.appendChild(option);
        });

        $("#inputRoomType").change(function() {
            let inputBedding = document.getElementById('inputBedding');
            $("#inputBedding option").remove();
            room_data.map(item => {
                if (this.value == item.room_type) {
                    let option = document.createElement("option");
                    option.innerText = item.bedding;
                    option.value = item.room_id;
                    inputBedding.appendChild(option);
                }
            })
        });

        $(".form-select option").each(function() {
            $(this).siblings('[id="' + this.id + '"]').remove();
        });
    </script>