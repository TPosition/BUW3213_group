<?php
// action of confirm the status path
include_once('../../action/reservation_confirm.php');
?>


<div class="modal fade" id="actionModel<?php echo $book_id ?>" tabindex="-1" role="dialog" aria-labelledby="actionModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="editModalLabel">Booking Action</h4>
            </div>
            <form method="post" action="reservation.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Status</label>
                        <select name="booking_status" class="form-select" aria-label="Default select example">
                            <option value="<?php echo $book_status ?>" selected><?php echo $book_status ?></option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Booking ID</label>
                        <input name="booking_id" value="<?php echo $book_id ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="booking_username" value="<?php echo $book_username ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="booking_name" value="<?php echo $book_name ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input name="booking_email" value="<?php echo $book_email ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Phone</label>
                        <input name=" booking_phone" value="<?php echo $book_phone ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Room Type</label>
                        <input name="book_roomtype" value="<?php echo $book_roomtype ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Room Type</label>
                        <input name="book_bedding" value="<?php echo $book_bedding ?>" class="form-control" readonly />
                    </div>
                </div>




                <div class="modal-body">
                    <div class="form-group">
                        <label>Meal</label>
                        <input name="booking_meal" value="<?php echo $book_meal ?>" class="form-control" readonly />
                    </div>
                </div>


                <div class="modal-body">
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="date" name="booking_checkin" value="<?php echo $book_checkin ?>" class="form-control" readonly />
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="date" name="booking_checkout" value="<?php echo $book_checkout ?>" class="form-control" readonly />
                    </div>
                </div>

                <!-- identify the take which room table id in action sql code -->
                <input type='hidden' name='room_id' value='$book_roomid' class='form-control' />
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>
</div>