<?php
include_once('../../config.php');
// Initialize the session
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta -->
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Home | Genibenix</title>
</head>

<body>
    <!-- Import Header Nav Bar -->
    <?php include_once(DIR_LAYOUT . 'user_navbar.php'); ?>

    <!-- Carousel -->
    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../image/carousel_slide1.png" class="d-block w-100" alt="Hotel Swimming Pool Scenery">
            </div>
            <div class="carousel-item">
                <img src="../../image/carousel_slide2.png" class="d-block w-100" alt="Beach View">
            </div>
            <div class="carousel-item">
                <img src="../../image/carousel_slide3.png" class="d-block w-100" alt="Hall View">
            </div>
        </div>
    </div>

    <div id="roomDiv">
        <h1 class="text-center my-5">Our Room and Rates</h1>
    </div>
    <!-- Bootstrap Card to show the rooms and the prices -->
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-sm-3">
                <div class="card text-center" style="width:auto">
                    <img class="card-img-top" src="../../image/singleroom.jpeg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Single Room</h4>
                        <p class="card-text">RM 60 per day</p>
                        <a href="reservation.php" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="width:auto">
                    <img class="card-img-top" src="../../image/doubleroom.jpeg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Double Room</h4>
                        <p class="card-text">RM 90 per day</p>
                        <a href="reservation.php" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="width:auto">
                    <img class="card-img-top" src="../../image/luxuryroom.jpeg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Luxury Room</h4>
                        <p class="card-text">RM 130 per day</p>
                        <a href="reservation.php" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="width:auto">
                    <img class="card-img-top" src="../../image/deluxeroom.jpeg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Deluxe Room</h4>
                        <p class="card-text">RM 180 per day</p>
                        <a href="reservation.php" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-center p-5 mt-5">
        <div class="container">
            <h1>Service is our mission</h1>
            <blockquote class="blockquote text-center">
                <p>“There is a spiritual aspect to our lives — when we give, we receive —
                    when a business does something good for somebody, that somebody feels
                    good about them!”</p>
                <footer class="blockquote-footer">Ben Cohen, <cite title="Source Title">Co-Founder Ben & Jerry’s</cite></footer>
            </blockquote>
        </div>

    </div>

    <!-- Import Footer -->
    <?php include_once(DIR_LAYOUT . 'footer.php'); ?>
    <?php include_once('resetPassword.php'); ?>
    <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
</body>

</html>