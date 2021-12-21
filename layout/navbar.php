<header class="row admin-bg-primary navbar sticky-top flex-md-nowrap shadow ">
    <a class="navbar-brand text-white col-md-3 col-lg-3 me-0 px-5 text-start" href="#">Genibenix Hotel</a>
    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="col-lg-6 text-end">

        <p class="text-white"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
    </div>
    <div class="col-lg-3 text-end">


        <a type="button" class="text-white" href="../../action/logout.php"><i class="bi bi-box-arrow-right" style="font-size: 25px;"></i></a>

    </div>

</header>