<?php
// action of edit user path
include_once('../../action/user_edit.php');

// get the current login admin data
$id = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $current_username = $row['username'];
        $role = $row['role'];
    }
}

?>

<main class="col-md-9 col-md-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom my-4">
        <h1 class="h2">User Profile</h1>
    </div>

    <div class="container">

        <div class="row d-flex">

            <form action="content.php" method="post">

                <div class="form-group my-4">
                    <label>Username</label>
                    <input name="username" value="<?php echo $current_username ?>" class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="new_password" value="" class="form-control" pattern=".{6,}" />
                    <div class="form-text">*Leave it Blank if not changed</div>
                </div>

                <!-- id, role value is used update to database when form submmited -->
                <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control" />
                <input type="hidden" name="role" value="<?php echo $role; ?>" class="form-control" />
                <button type="submit" class="btn btn-primary float-end mt-4">Submit</button>

            </form>
        </div>
    </div>
</main>