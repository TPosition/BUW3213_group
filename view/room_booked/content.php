<main class="col-md-9 col-lg-10 ms-sm-auto px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-3">
		<h1 class="h2">Room Booking</h1>
	</div>

	<div class="row my-5">

		<div class="clearfix mb-3">

			<button class="btn btn-primary btn-lg float-end" data-bs-toggle='modal' data-bs-target='#addModel'><i class="bi bi-plus-lg"></i> &nbsp;Booking</button>
		</div>

		<?php


		// Attempt select query execution
		$sql = "SELECT * FROM room_booked WHERE status = 'Confirmed' || status = 'Rejected'";
		$i = 1;  // make for sequential number
		if ($result = mysqli_query($link, $sql)) {
			if (mysqli_num_rows($result) > 0) {
				echo "<div class='table-responsive'>";
				echo " <table cellpadding='0' cellspacing='0' class='table table-striped table-bordered'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>No.</th>";
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				echo "<th>Phone No</th>";
				echo "<th>Room type</th>";
				echo "<th>Bedding</th>";
				echo "<th>Meal</th>";
				echo "<th>Check In</th>";
				echo "<th>Check Out</th>";
				echo "<th>Status</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_array($result)) {
					//assign the value for show in the table and pass to the edit.


					$rbook_id =   $row['id'];
					$rbook_roomid = $row['room_id'];
					$rbook_username = $row['username'];
					$rbook_name = $row['name'];
					$rbook_email = $row['email'];
					$rbook_phone = $row['phone'];
					$rbook_meal = $row['meal'];
					$rbook_checkin = $row['check_in'];
					$rbook_checkout = $row['check_out'];
					$rbook_status = $row['status'];
					echo "<tr>";
					echo "<td> $i.</td>";
					echo "<td>$rbook_name</td>";
					echo "<td>$rbook_email</td>";
					echo "<td>$rbook_phone</td>";
					if ($rbook_roomid) {
						// based on room_id to display the roomtype and bedding value
						$sql_room = "SELECT room_type, bedding  FROM room WHERE id = $rbook_roomid";

						$res = mysqli_query($link, $sql_room);
						if (mysqli_num_rows($res) > 0) {
							while ($row = mysqli_fetch_assoc($res)) {

								$rbook_roomtype = $row['room_type'];
								$rbook_bedding = $row['bedding'];


								echo "<td>$rbook_roomtype</td>";
								echo "<td>$rbook_bedding</td>";
							}
						}
					}

					echo "<td>$rbook_meal</td>";
					echo "<td>$rbook_checkin</td>";
					echo "<td>$rbook_checkout</td>";
					echo "<td>$rbook_status</td>";



					echo "<td>";
					echo " <a class='btn btn-success fw-bold me-2' data-bs-toggle='modal' data-bs-target='#editModel$rbook_id'><i class='bi bi-pencil-square'></i>&nbsp; Edit</a>";
					echo "<a href='../../action/delete.php?id=$rbook_id&table_name=room_booked' class='btn btn-danger fw-bold'><i class='bi bi-trash'></i>&nbsp;Delete </a>";
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

		// Click the add button will direct to room_booked add.php form
		include_once('add.php');


		// Close connection
		mysqli_close($link);
		?>

	</div>
</main>