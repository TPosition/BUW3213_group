<?php
// action of edit user path
include_once('../../action/user_edit.php');
?>

<div class="modal fade" id="editModel<?php echo $uid; ?>" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Edit User</h4>
            </div>
            <!--  check the role show different edit form -->
            <?php if ($role == "admin") { ?>
                <form method="post" action="edit.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" value="<?php echo $uusername; ?>" class="form-control" placeholder="Enter User name" required>
                        </div>
                    </div>
                    <!-- user id and role  -->
                    <input type="hidden" name="id" value="<?php echo $uid; ?>" class="form-control" />
                    <input type="hidden" name="role" value="<?php echo $role; ?>" class="form-control" />
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            <?php } else { ?>

                <form method="post" action="edit.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" value="<?php echo $uusername; ?>" class="form-control" placeholder="Enter User name" required>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Phone No</label>
                            <input name="phone" value="<?php echo $uphone; ?>" class="form-control" placeholder="Enter Phone Number" pattern="[0-9]{10,11}" required>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $uemail; ?>" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                    </div>

                    <!-- user id and role  -->
                    <input type="hidden" name="id" value="<?php echo $uid; ?>" class="form-control" />
                    <input type="hidden" name="role" value="<?php echo $role; ?>" class="form-control" />
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                </form>


            <?php } ?>
        </div>
    </div>
</div>