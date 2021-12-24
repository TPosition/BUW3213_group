<header class="admin-bg-primary navbar flex-md-nowrap shadow ">
    <button class="navbar-toggler d-md-none collapsed border border-3 rounded border-white ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class=" bi bi-list text-white"></i>
    </button>
    <a class="navbar-brand text-white col-md-3 me-0 px-5 text-start" href="#">Genibenix Hotel</a>


    <div class="col-lg-3 text-end d-none d-md-block">
        <a type="button" class="text-white" href="../../action/logout.php"><i class="bi bi-box-arrow-right me-4" style="font-size: 25px;"></i></a>

    </div>

</header>

<script>
    "use strict"

    // when open the page, display the sidebar if is desktop size 
    $(document).ready(function() {
        var win = $(this);
        if (win.width() >= 768) {
            $("#sidebarMenu").removeClass("collapse");
        }
    });

    // display sidebar when screen is desktop size else close it when in mobile size
    $(window).resize(function() {
        var win = $(this);
        if (win.width() >= 768) {
            $("#sidebarMenu").removeClass("collapse");
        } else {
            $("#sidebarMenu").addClass("collapse");
        }
    });
</script>