<nav id="sidebarMenu" class="admin-bg-primary col-md-3 navbar sidebar collapse align-items-start">
    <div class="position-sticky pt-3" style="top:3em">
        <ul class="nav nav-pills flex-column">
            <?php
            class item
            {
                public $href;
                public $name;
                public $dir;
                public $icon;
                public $isDir;
            }
            $uri =  $_SERVER['REQUEST_URI'];

            $item1 = new item();
            $item1->href = '../dashboard/index.php';
            $item1->name = 'Dashboard';
            $item1->icon = "<i class='bi bi-house-door'></i>";
            $item1->isDir = $uri == URI_VIEW . 'dashboard/index.php' ? true : false;

            $item2 = new item();
            $item2->href = '../room/index.php';
            $item2->name = 'Room Management';
            $item2->icon = '<i class="bi bi-journal-check"></i>';
            $item2->isDir = $uri == URI_VIEW . 'room/index.php' ? true : false;

            $item3 = new item();
            $item3->href = '../room_booked/index.php';
            $item3->name = 'Room Booking';
            $item3->icon = '<i class="bi bi-ticket"></i>';
            $item3->isDir = $uri == URI_VIEW . 'room_booked/index.php' ? true : false;

            $item4 = new item();
            $item4->href = '../payment/index.php';
            $item4->name = 'Payment';
            $item4->icon = '     <i class="bi bi-credit-card"></i>';
            $item4->isDir = $uri == URI_VIEW . 'payment/index.php' ? true : false;

            $item5 = new item();
            $item5->href = '../user/index.php';
            $item5->name = 'User';
            $item5->icon = ' <i class="bi bi-person"></i>';
            $item5->isDir = $uri == URI_VIEW . 'user/index.php' ? true : false;

            $items = array($item1, $item2, $item3, $item4, $item5);
            foreach ($items as $item) {
                $isActive = $item->isDir ? 'active' : '';
                echo "<li class='nav-item'>
                <a href=$item->href class='nav-link text-white $isActive'>
                $item->icon
                    &nbsp; $item->name
                </a>
            </li>";
            }
            ?>
            <li class="nav-item">
                <a href="../../action/logout.php" class="nav-link text-white">
                    <i class="bi bi-box-arrow-right"></i>
                    &nbsp; Logout
                </a>
            </li>
        </ul>

    </div>
</nav>