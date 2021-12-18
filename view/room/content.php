<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom my-4">
        <h1 class="h2">Room Information</h1>
    </div>

    <div class="row m-5">

        <div class="clearfix mb-3">

            <button class="btn btn-primary btn-lg float-end" data-bs-toggle='modal' data-bs-target='#addModel'><i class="bi bi-plus-lg"></i> &nbsp;Add Room</button>
        </div>

        <table cellpadding="0" cellspacing="0" class=" table table-striped table-bordered">

            <thead>
                <tr>
                    <th>No .</th>
                    <th>Room Type</th>
                    <th>Bedding</th>
                    <th>Room Number</th>
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
                    <td>Win 95+</td>
                    <td>Win 95+</td>

                    <td> <button class='btn btn-success fw-bold' data-bs-toggle='modal' data-bs-target='#editModel'><i class="bi bi-pencil-square"></i>&nbsp; Edit</button>
                        <button class='btn btn-danger fw-bold'><i class="bi bi-trash"></i>&nbsp; Delete</button>
                    </td>
                
                </tr>
                <tr class="gradeC">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center">5.5</td>
                    <td class="center">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6</td>
                    <td>Win 98+</td>
                    <td class="center">6</td>
                    <td class="center">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td class="center">7</td>
                    <td class="center">A</td>
                </tr>
            </tbody>
        </table>

        <?php include_once('add.php'); ?>
    </div>
    <?php include_once('edit.php'); ?>


</main>



