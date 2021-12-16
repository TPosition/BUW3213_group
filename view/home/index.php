<?php
include_once('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once(DIR_LAYOUT . 'head.php'); ?>
    <title>Login | Genibenix</title>
</head>

<body>
    <?php include_once(DIR_LAYOUT . 'user_navbar.php'); ?>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-center" style="width:auto">
                    <img class="card-img-top" src="../../image/singleroom.jpeg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Single Room</h4>
                        <p class="card-text">Rm 60</p>
                        <a href="#" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once(DIR_SYSTEM . 'globaljs.php'); ?>
</body>

</html>