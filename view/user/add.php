<?php
// action of edit user path
include_once('../../action/user_add.php');
?>




<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addModelLabel">Add User</h4>
            </div>
            <form method="post" action="add.php">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="mySelect">Role</label>
                        <select name="role" id="mySelect" class="form-select">
                            <option value="admin" selected>Admin</option>
                            <option value="user">Customer</option>
                        </select>
                    </div>
                </div>
                <div class="collapse show" id="collapseAdmin">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="admin_username" value="<?php echo $username ?>" class="form-control" placeholder="Enter User name" />
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="admin_password" value="<?php echo $password ?>" class="form-control" placeholder="Enter a password" pattern=".{6,}" />
                        </div>
                    </div>
                </div>



                <div class="collapse" id="collapseCustomer">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="user_username" value="<?php echo $username ?>" class="form-control" placeholder="Enter User name" />

                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Phone No</label>
                            <input type="number" name="user_phone" value="<?php echo $phone ?>" class="form-control" placeholder="Enter a Phone number" pattern="[0-9]{10,11}" />

                        </div>
                    </div>
                    <div class=" modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="user_email" value="<?php echo $email ?>" class="form-control" placeholder="Enter Email Address" />


                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="user_password" value="<?php echo $password ?>" class="form-control" placeholder="Enter a Password" pattern=".{6,}" />

                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    "use strict"

    $('#mySelect').on('change', function(e) {
        if ($('#mySelect').val() == "admin") {
            $('#collapseAdmin').addClass("show");
            $('#collapseCustomer').removeClass("show");
        } else {
            $('#collapseCustomer').addClass("show");
            $('#collapseAdmin').removeClass("show");
        }
    });
</script>