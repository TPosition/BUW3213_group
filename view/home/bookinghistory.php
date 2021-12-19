<?php
include_once('../../config.php');
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
            <h3 class="p-3">Do not have any booking? <a href="reservation.php">Book Now!</a></h3>

        </div>
        <div class="container my-3">
            <div id="bookingHistory">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card my-3">
                            <div class="card-header">
                                <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                    <h5>Deluxe Room</h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#bookingHistory">
                                <div class="card-body">
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Name:</h6>
                                            <p>Ali bin Abu</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Phone:</h6>
                                            <p>0123456789</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Check In Date:</h6>
                                            <p>18/12/2021</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Check Out Date:</h6>
                                            <p>22/12/2021</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Meals:</h6>
                                            <p>Breakfast</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Bedding:</h6>
                                            <p>Queen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card my-3">
                            <div class="card-header">
                                <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                    <h5> Single Room</h5>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#bookingHistory">
                                <div class="card-body">
                                <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Name:</h6>
                                            <p>Ali bin Abu</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Phone:</h6>
                                            <p>0123456789</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Check In Date:</h6>
                                            <p>18/12/2021</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Check Out Date:</h6>
                                            <p>22/12/2021</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Meals:</h6>
                                            <p>Breakfast</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Bedding:</h6>
                                            <p>Queen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card my-3">
                            <div class="card-header">
                                <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                    <h5> Single Room</h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#bookingHistory">
                                <div class="card-body">
                                <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Name:</h6>
                                            <p>Ali bin Abu</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Phone:</h6>
                                            <p>0123456789</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Check In Date:</h6>
                                            <p>18/12/2021</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Check Out Date:</h6>
                                            <p>22/12/2021</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Meals:</h6>
                                            <p>Breakfast</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Bedding:</h6>
                                            <p>Queen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card my-3">
                            <div class="card-header">
                                <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                                    <h5> Single Room</h5>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#bookingHistory">
                                <div class="card-body">
                                <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Name:</h6>
                                            <p>Ali bin Abu</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Phone:</h6>
                                            <p>0123456789</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Check In Date:</h6>
                                            <p>18/12/2021</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Check Out Date:</h6>
                                            <p>22/12/2021</p>
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="col text-start">
                                            <h6>Meals:</h6>
                                            <p>Breakfast</p>
                                        </div>
                                        <div class="col text-start">
                                            <h6>Bedding:</h6>
                                            <p>Queen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Footer -->
    <?php include_once(DIR_LAYOUT . 'footer.php'); ?>
    <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
</body>

</html>