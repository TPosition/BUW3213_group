<header class="admin-bg-primary navbar sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand text-white col-md-3 col-lg-2 me-0 px-4" href="#">Genibenix Hotel</a>
    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <p class="text-white float-end"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">

            <a class="nav-link px-3 text-white" href="../../action/logout.php"><i class="bi bi-box-arrow-right" style="font-size: 25px;"></i></a>
        </div>
    </div>
</header>