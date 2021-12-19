<?php
// action of add room path
include_once('../../action/room_add.php');
?>


<div class="modal fade" id="actionModel" tabindex="-1" role="dialog" aria-labelledby="actionModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="actionModelLabel">Add Room</h4>
            </div>
            <form method="post" action="add.php">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Room Type</label>
                        <input name="room_type" value="" class="form-control" placeholder="Enter Room type" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Bedding</label>
                        <input name="bedding" value="" class="form-control" placeholder="Enter Bedding" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
    </div>
</div>