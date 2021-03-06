<main class="col-md-9 col-lg-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom my-4">
        <h1 class="h2">Room Information</h1>
    </div>

    <div class="row m-5">

        <div class="clearfix mb-3">

            <button class="btn btn-primary btn-lg float-end" data-bs-toggle='modal' data-bs-target='#addModel'><i class="bi bi-plus-lg"></i> &nbsp;Add Room</button>
        </div>


        <?php


        // Attempt select query execution
        $sql = "SELECT * FROM room";
        $i = 1;  // make for sequential number
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<div class='table-responsive'>";
                echo " <table cellpadding='0' cellspacing='0' class='table table-striped table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>No.</th>";
                echo "<th>Room Type</th>";
                echo "<th>Bedding</th>";
                echo "<th>Price</th>";
                echo "<th>Username</th>";
                echo "<th>Status</th>";
                echo "<th>Action</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                    $rid =   $row['id'];
                    $rroom_type = $row['room_type'];
                    $rbedding = $row['bedding'];
                    $rprice = $row['price'];
                    $rusername = $row['booked_by_username'];
                    echo "<tr>";
                    echo "<td> $i.</td>";
                    echo "<td> $rroom_type</td>";
                    echo "<td> $rbedding</td>";
                    echo "<td> RM $rprice</td>";
                    echo "<td> $rusername</td>";
                    if ($row['status'] == null) {
                        echo "<td> Empty </td>";
                    } else {
                        echo "<td>" . $row['status'] . "</td>";
                    }
                    echo "<td>";
                    echo " <a class='btn btn-success fw-bold me-3' data-bs-toggle='modal'   data-bs-target='#editModel$rid'><i class='bi bi-pencil-square'></i>&nbsp; Edit</a>";
                    echo "<a href='../../action/delete.php?id=$rid&table_name=room' class='btn btn-danger fw-bold'><i class='bi bi-trash'></i>&nbsp;Delete </a>";
                    echo "</td>";
                    echo "</tr>";

                    // Based on id to the particular edit model.
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

        // Click the add room button will direct to add.php form
        include_once('add.php');

        // Close connection
        mysqli_close($link);
        ?>

    </div>


</main>