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
            <form>
                <div class="form-group mb-3">
                    <label for="inputName">Name:</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
                </div>
                <div class="form-group mb-3">
                    <label for="inputEmail">Email Address:</label>
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email Address">
                </div>
                <div class="form-group mb-3">
                    <label for="inputPhoneNo">Phone Number:</label>
                    <input type="text" class="form-control" id="inputPhoneNo" name="inputPhoneNo" placeholder="Your Phone Number">
                </div>
                <div class="form-group mb-3">
                    <label for="inputRoomType">Type of Room</label>
                    <select id="inputRoomType" class="form-select" aria-label="Default select example">
                        <option>-- Select the room --</option>
                        <?php while($table_Row = mysqli_fetch_array($result)):; ?>
                        <option value="<?php echo $table_Row[0]; ?>"><?php echo $table_Row[0]; ?> Room</option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="inputBedding">Bedding</label>
                    <select id="inputBedding" class="form-select" aria-label="Default select example">
                        <option>-- Select the bedding --</option>
                        <option>Single</option>
                        <option>Double</option>
                        <option>Queen</option>
                        <option>King</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="inputMeal">Meal</label>
                    <select id="inputMeal" class="form-select" aria-label="Default select example">
                        <option>-- Select the meal --</option>
                        <option>Room Only</option>
                        <option>Breakfast</option>
                        <option>Lunch</option>
                        <option>Dinner</option>
                        <option>Half Board (Breakfast + Lunch)</option>
                        <option>Full Board (Breakfast + Lunch + Dinner)</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="inputCheckIn">Check In Date</label>
                    <input type="date" class="form-control" id="inputCheckIn">
                </div>
                <div class="form-group mb-3">
                    <label for="inputCheckOut">Check Out Date</label>
                    <input type="date" class="form-control" id="inputCheckOut">
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