<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addModelLabel">Add User</h4>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="mySelect">Role</label>
                        <select id="mySelect" class="form-select">
                            <option value="admin">Admin</option>
                            <option value="customer">Customer</option>
                        </select>
                    </div>
                </div>
                <div class="collapse show" id="collapseAdmin">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="usname" value="" class="form-control" placeholder="Enter User name">
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Password</label>
                            <input name="usname" value="" class="form-control" placeholder="Enter User name">
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapseCustomer">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="usname" value="" class="form-control" placeholder="Enter User name">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Phone No</label>
                            <input name="pasd" value="" class="form-control" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="usname" value="" class="form-control" placeholder="Enter User name">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Password</label>
                            <input name="usname" value="" class="form-control" placeholder="Enter User name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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