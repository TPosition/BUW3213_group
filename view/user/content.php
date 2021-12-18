<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom my-4">
        <h1 class="h2">User</h1>
    </div>



    <div class="clearfix mx-5">

        <button class="btn btn-primary btn-lg float-end" data-bs-toggle='modal' data-bs-target='#addModel'><i class="bi bi-plus-lg"></i> &nbsp;Add User</button>
    </div>

    <div class="row d-flex justify-content-around">
        <div class="col-lg-5 col-md-12">
            <div class="clearfix my-4">




                <h3 class="pull-left">Admin</h3>
            </div>

            <table cellpadding="0" cellspacing="0" class=" table table-striped table-bordered">

                <thead>
                    <tr>
                        <th>No .</th>
                        <th>Username</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        <td>
                            Internet
                            Explorer
                            4.0
                        </td>

                        <td> <button class='btn btn-success fw-bold' data-bs-toggle='modal' data-bs-target='#editModel'><i class="bi bi-pencil-square"></i>&nbsp; Edit</button>
                            <button class='btn btn-danger fw-bold'><i class="bi bi-trash"></i>&nbsp; Delete</button>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>


        <div class="col-lg-6 col-md-12">
            <div class="clearfix my-4">

                <h3 class="pull-left">Customer</h3>
            </div>

            <table cellpadding="0" cellspacing="0" class=" table table-striped table-bordered">

                <thead>
                    <tr>
                        <th>No .</th>
                        <th>Username</th>
                        <th>Phone No</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        <td>
                            Internet
                            Explorer
                            4.0
                        </td>
                        <td>
                            Internet
                            Explorer
                            4.0
                        </td>

                        <td> <button class='btn btn-success fw-bold' data-bs-toggle='modal' data-bs-target='#editModel'><i class="bi bi-pencil-square"></i>&nbsp; Edit</button>
                            <button class='btn btn-danger fw-bold'><i class="bi bi-trash"></i>&nbsp; Delete</button>
                        </td>

                    </tr>





                </tbody>


            </table>
        </div>
        <?php include_once('add.php'); ?>
    </div>
    <?php include_once('edit.php'); ?>

</main>