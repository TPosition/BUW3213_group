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
                        <input name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter a name" required />
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


                        <select name="room_id" class="form-select" aria-label="Default select example">

                            <?php
                            $sql = "SELECT id, room_type FROM room";
                            $res = mysqli_query($link, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $room_type = $row['room_type'];
                                    $room_id = $row['id'];

                                    echo "<option value='$room_id'>$room_type</option>";
                                }
                            }
                            ?>
                        </select>

                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Meal</label>
                        <select name="meal" class="form-select" aria-label="Default select example">
                            <option value="breakfast">breakfast</option>
                            <option value="lunch">lunch</option>
                            <option value="dinner">dinner</option>
                            <option value="half board">half board </option>
                            <option value="full board">full board </option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="date" name="checkin" value="<?php echo $checkin; ?>" class="form-control" />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="date" name="checkout" value="<?php echo $checkout; ?>" class="form-control" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>
</div>