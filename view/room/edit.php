<?php
// action of room edit path
include_once('../../action/room_edit.php');
?>

<div class="modal fade" id="editModel<?php echo $rid; ?>" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="editModelLabel">Edit Room</h4>
            </div>
            <form method="post" action="edit.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Room ID</label>
                        <input name="room_id" value="<?php echo $rid; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Room Type</label>
                        <input name="room_type" value="<?php echo $rroom_type; ?>" class="form-control" required>

                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Bedding</label>
                        <input name="bedding" value="<?php echo $rbedding; ?>" class="form-control" required>

                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" value="<?php echo $rprice; ?>" class="form-control" min="0" required>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>
</div>