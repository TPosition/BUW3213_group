<main class="col-md-9 col-lg-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom my-4">
        <h1 class="h2">User</h1>
    </div>



    <div class="clearfix mx-5">

        <button class="btn btn-primary btn-lg float-end" data-bs-toggle='modal' data-bs-target='#addModel'><i class="bi bi-plus-lg"></i> &nbsp;Add User</button>
    </div>



    <div class="row d-flex justify-content-around">



        <div class="col-lg-5 col-md-12">
            <div class="clearfix my-4">

                <h3 class="pull-left">Admin</h3>
            </div>

            <?php


            // Attempt select query execution for admin
            $sql = "SELECT * FROM user WHERE role = 'admin' or role = 'super admin'";
            $i = 1;  // make for sequential number
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<div class='table-responsive'>";
                    echo " <table cellpadding='0' cellspacing='0' class='table table-striped table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>No.</th>";
                    echo "<th>Username</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($row = mysqli_fetch_array($result)) {

                        $uid =   $row['id'];
                        $uusername = $row['username'];
                        $upassowrd = $row['password'];

                        $role = $row['role'];

                        echo "<tr>";
                        echo "<td> $i</td>";
                        echo "<td> $uusername </td>";

                        // Only the super admin can do the action for admin 
                        if ($_SESSION['role'] == 'super admin') {
                            echo "<td>";
                            echo " <a class='btn btn-success fw-bold me-3' data-bs-toggle='modal'   data-bs-target='#editModel$uid'><i class='bi bi-pencil-square'></i>&nbsp; Edit</a>";
                            echo "<a href='../../action/delete.php?id=$uid&table_name=user' class='btn btn-danger fw-bold'><i class='bi bi-trash'></i>&nbsp;Delete </a>";
                            echo "</td>";
                        } else {

                            echo "<td></td>";
                        }

                        echo "</tr>";

                        echo include('edit.php');
                        $i++;
                    }


                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    // Free result set
                    mysqli_free_result($result);
                } else {
                    echo "<p class='lead'><em>No records were found.</em></p>";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

            ?>
        </div>


        <div class="col-lg-6 col-md-12">
            <div class="clearfix my-4">

                <h3 class="pull-left">Customer</h3>
            </div>
            <?php


            // Attempt select query execution
            $sql = "SELECT * FROM user WHERE role = 'user'";
            $i = 1;  // make for sequential number
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<div class='table-responsive'>";
                    echo " <table cellpadding='0' cellspacing='0' class='table table-striped table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>No.</th>";
                    echo "<th>Username</th>";
                    echo "<th>Phone No</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($row = mysqli_fetch_array($result)) {

                        $uid =   $row['id'];
                        $uusername = $row['username'];
                        $uphone = $row['phone'];
                        $uemail = $row['email'];
                        $role = $row['role'];

                        echo "<tr>";
                        echo "<td> $i</td>";
                        echo "<td> $uusername </td>";
                        echo "<td> $uphone </td>";
                        echo "<td>";
                        echo " <a class='btn btn-success fw-bold me-3' data-bs-toggle='modal'   data-bs-target='#editModel$uid'><i class='bi bi-pencil-square'></i>&nbsp; Edit</a>";
                        echo "<a href='../../action/delete.php?id=$uid&table_name=user' class='btn btn-danger fw-bold'><i class='bi bi-trash'></i>&nbsp;Delete </a>";
                        echo "</td>";
                        echo "</tr>";

                        echo include('edit.php');
                        $i++;
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    // Free result set
                    mysqli_free_result($result);
                } else {
                    echo "<p class='lead'><em>No records were found.</em></p>";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            include_once('add.php');
            // Close connection
            mysqli_close($link);

            ?>
        </div>

    </div>


</main>