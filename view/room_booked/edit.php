<?php
// action of edit booking path
include_once('../../action/booking_edit.php');


?>

<div class="modal fade" id="editModel<?php echo $rbook_id ?>" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="editModalLabel">Edit Booking</h4>
            </div>
            <form method="post" action="edit.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Booking ID</label>
                        <input name="booking_id" value="<?php echo $rbook_id ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="booking_username" value="<?php echo $rbook_username ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="booking_name" value="<?php echo $rbook_name ?>" class="form-control" placeholder="Enter a name" pattern="[A-Za-z\sa-z]{1,255}" required />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input name="booking_email" value="<?php echo $rbook_email ?>" class="form-control" placeholder="Enter a email address" required />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Phone</label>
                        <input name=" booking_phone" value="<?php echo $rbook_phone ?>" class="form-control" placeholder="Enter a phone number" pattern="[0-9]{10,11}" required />
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Room Type</label>
                        <input name="roomType" value="<?php echo $rbook_roomtype ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Bedding</label>
                        <input name="booking" value="<?php echo $rbook_bedding ?>" class="form-control" readonly />
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Meal</label>
                        <select name="booking_meal" class="form-select" aria-label="Default select example">
                            <option value="<?php echo $rbook_meal ?>" selected><?php echo $rbook_meal ?></option>
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
                        <input type="date" name="booking_checkin" value="<?php echo $rbook_checkin ?>" class="form-control" required />

                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Check Out</label>
                        <input type="date" name="booking_checkout" value="<?php echo $rbook_checkout ?>" class="form-control" required />

                    </div>
                </div>



                <input name="room_id" type="hidden" value="<?php echo $rbook_roomid ?>" class="form-control" required />


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>
</div>

<script>
    // Remove duplicate of meal option
    $(".form-select option").each(function() {
        $(this).siblings('[value="' + this.value + '"]').remove();
    });
</script>