<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Testimonials | Carcentive</title>
    <?php require_once('include/css.php'); ?>
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
    <?php require_once('include/main_header.php'); ?>
    <?php require_once('include/side_bar.php'); ?>
    <!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
        <div class="main-content">
            <div class="breadcrumb">
                <h1>Home</h1>
                <ul>
                    <li><a href="testimonial.php">Testimonials</a></li>
                    <li>Home</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top">
            </div><!-- end of main-content -->

            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Testimonials List</h4>
                            <button class="btn btn-primary float-right mb-4" type="button" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">Add Testimonials
                            </button>
                            <div class="table-responsive">
                                <table class="display table table-striped table-bordered"
                                       id="multicolumn_ordering_table"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Made</th>
                                        <th>Model</th>
                                        <th>Year</th>
                                        <th>Message</th>
                                        <th>Image</th>
                                        <th>Approve</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- start of social-link -->
                                    <?php
                                    $sql = "SELECT * FROM testimonials order by id desc";
                                    $result = mysqli_query($connect, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $sl = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $sl; ?></td>
                                                <td><?php echo $row["name"]; ?></td>
                                                <td><?php echo $row["client"]; ?></td>
                                                <td><?php echo $row["model"]; ?></td>
                                                <td><?php echo $row["year"]; ?></td>
                                                <td><?php echo $row["message"]; ?></td>
                                                <td class="d-flex justify-content-end"><img src="<?php echo $row["image"]; ?>" width="100px"/></td>
                                                <td><?php if ($row["approve"] == 1) { ?>
                                                        <button class="btn btn-raised btn-raised-success m-1"
                                                                type="button">
                                                            Approve
                                                        </button>
                                                    <?php } else { ?>
                                                        <button class="btn btn-raised btn-raised-warning m-1"
                                                                type="button">
                                                            Un approve
                                                        </button>
                                                    <?php } ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href=""><i class="nav-icon text-primary i-Pen-5"></i></a>
                                                    <a href=""><i class="nav-icon text-danger i-Delete-File"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $sl++;
                                        }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php require_once('include/footer.php'); ?>
    </div>
</div>

<?php require_once('include/js.php'); ?>
</body>
</html>

<!--  Large Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Testimonials</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                ...

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary ml-2" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>