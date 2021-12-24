<?php
// action of add room path
include_once('../../action/reset_password.php');
?>



<div class="modal fade" id="resetPasswordModel" tabindex="-1" role="dialog" aria-labelledby="resetPasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="resetPasswordLabel">Reset Password</h4>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="modal-body">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" placeholder="Enter Password" pattern=".{6,}" required />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>