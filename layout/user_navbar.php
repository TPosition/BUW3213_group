<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="../../image/logo-pure.png" width="100vw" height="100vh" alt="Genibenix Logo">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="index.php#roomDiv" class="nav-link px-2 link-dark">Rooms</a></li>
            <li><a href="bookinghistory.php" class="nav-link px-2 link-dark">My Booking</a></li>
        </ul>


        <div class="col-md-4 text-end">
            <?php if (isset($_SESSION["role"]) == 'user' && isset($_SESSION["username"])) { ?>
                <h5>Welcome, <?php echo $_SESSION["username"] ?> !</h5>
                <a class='btn btn-outline-primary me-2 mt-2' data-bs-toggle='modal' data-bs-target='#resetPasswordModel'> Reset Password</a>
                <a href="../../action/logout.php"> <button type="button" class="btn btn-primary mt-2">Log out</button></a>
            <?php } else { ?>
                <a href="../login/index.php" type="button" class="btn btn-outline-primary me-2">Login</a>
                <a href="../register/index.php" type="button" class="btn btn-primary">Sign-up</a>
            <?php } ?>


        </div>
    </header>
</div>