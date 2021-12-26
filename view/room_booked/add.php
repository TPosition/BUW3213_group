<?php
// action of add booking path
include_once('../../action/booking_add.php');
?>

<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="addModelLabel">Add Booking</h4>
            </div>
            <form method="post" action="add.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Enter a username" required />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter a name" pattern="[A-Za-z\sa-z]{1,255}" required />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter a email address" required />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" value="<?php echo $phone; ?>" class="form-control" placeholder="Enter a phone number" pattern="[0-9]{10,11}">

                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Room Type</label>
                        <select name="roomType" id="roomType" class="form-select" aria-label="Default select example">
                            <option value="" disabled selected>-- Select the room --</option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Bedding</label>
                        <select name="bedding_room_id" id="bedding_room_id" class="form-select" aria-label="Default select example">
                            <option value="" disabled selected>-- Select the room for choosing the bedding --</option>
                        </select>

                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Meal</label>
                        <select name="meal" class="form-select" aria-label="Default select example">
                            <option value="" disabled selected>-- Select the meal --</option>
                            <option value="No Meal">Room Only</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <option value="Half Board">Half Board (Breakfast + Lunch)</option>
                            <option value="Full Board">Full Board (Breakfast + Lunch + Dinner)</option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="date" name="checkin" value="<?php echo $checkin; ?>" class="form-control" />
                        <span class="help-block"><?php echo $checkIn_err; ?></span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Check Out</label>
                        <input type="date" name="checkout" value="<?php echo $checkout; ?>" class="form-control" />
                        <span class="help-block"><?php echo $checkOut_err; ?></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>
</div>
<script>
    "use strict"

    // Define an empty array to fetch FREE ROOM from database
    let room_data = [];
    let room_data_selected = [];
    <?php
    // Prepare a SELECT statement to get the FREE ROOM data
    $sql = "SELECT * FROM room WHERE id IN (SELECT min(id) FROM room WHERE status='Free' GROUP BY room_type, bedding)";
    $res = mysqli_query($link, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $room_type = $row['room_type'];
            $bedding = $row['bedding'];
            $room_id = $row['id'];
            $status =  $row['status'];
            echo "room_data.push({room_id: '$room_id', room_type: '$room_type',bedding:'$bedding',status:'$status' });\n";
        }
    }
    ?>
    const roomType = document.getElementById('roomType');
    room_data.map(item => {
        let option = document.createElement("option");
        option.innerText = item.room_type;
        option.value = item.room_type;
        option.id = item.room_type;
        roomType.appendChild(option);
    });

    $("#roomType").change(function() {
        let bedding_room_id = document.getElementById('bedding_room_id');
        $("#bedding_room_id option").remove();
        room_data.map(item => {
            if (this.value == item.room_type) {
                let option = document.createElement("option");
                option.innerText = item.bedding;
                option.value = item.room_id;
                bedding_room_id.appendChild(option);
            }
        })
    });

    $(".form-select option").each(function() {
        $(this).siblings('[id="' + this.id + '"]').remove();
    });
</script>