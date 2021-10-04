<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Testimonials | Carcentive</title>
    <?php require_once('include/css.php'); ?>
    <?php require_once('include/insert.php'); ?>
    <?php require_once('include/update.php'); ?>
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
            <?php if (!isset($_GET['id'])) { ?>
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
                                           id="zero_configuration_table"
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
                                                    <td class="d-flex justify-content-end"><img
                                                                src="<?php echo $row["image"]; ?>" width="100px"/></td>
                                                    <td><?php if ($row["approve"] == 1) { ?>
                                                            <a href="include/approve.php?testimonial_id=<?php echo $row["id"]; ?>&approve=0" class="btn btn-raised btn-raised-success m-1">
                                                                Approve
                                                            </a>
                                                        <?php } else { ?>
                                                            <a href="include/approve.php?testimonial_id=<?php echo $row["id"]; ?>&approve=1" class="btn btn-raised btn-raised-warning m-1">
                                                                Un approve
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="testimonial.php?id=<?php echo $row["id"]; ?>"><i
                                                                    class="nav-icon text-primary i-Pen-5"></i></a>
                                                        <a href="include/delete.php?testimonial_id=<?php echo $row["id"]; ?>"><i
                                                                    class="nav-icon text-danger i-Delete-File"></i></a>
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

            <?php } else { ?>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Update Testimonial</h4>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <?php
                                        $sql = "SELECT * FROM testimonials where id='{$_GET['id']}'";
                                        $result = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-2 form-group mb-3">
                                                            <label for="id">ID:</label>
                                                            <input class="form-control" id="id" name="id"
                                                                   type="text"
                                                                   placeholder="Enter id" value="<?php echo $row["id"]; ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-5 form-group mb-3">
                                                            <label for="name">Name:</label>
                                                            <input class="form-control" id="name" name="name"
                                                                   type="text"
                                                                   placeholder="Enter Name" value="<?php echo $row["name"]; ?>" required/>
                                                        </div>
                                                        <div class="col-md-5 form-group mb-3">
                                                            <label for="client">Made:</label>
                                                            <input class="form-control" id="client" name="client"
                                                                   type="text"
                                                                   placeholder="Enter Made" value="<?php echo $row["client"]; ?>" required/>
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="model">Model:</label>
                                                            <input class="form-control" id="model" name="model"
                                                                   type="text"
                                                                   placeholder="Enter Model" value="<?php echo $row["model"]; ?>" required/>
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="year">Year:</label>
                                                            <input class="form-control" id="year" name="year"
                                                                   type="text"
                                                                   placeholder="Enter Year" value="<?php echo $row["year"]; ?>" required/>
                                                        </div>
                                                        <div class="col-md-12 form-group mb-3">
                                                            <label for="message">Message:</label>
                                                            <textarea class="form-control" rows="7" id="message"
                                                                      name="message"
                                                                      placeholder="Enter Message"
                                                                      required><?php echo $row["message"]; ?></textarea>
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="image">Image:</label>
                                                            <div class="custom-file">
                                                                <input class="custom-file-input" id="image" name="image"
                                                                       type="file"
                                                                       aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group mb-3">
                                                            <label for="approve">Approve:</label>
                                                            <select class="form-control" id="approve" name="approve" required>
                                                                <option value="0" <?php echo $row["approve"]==1 ? 'selected':''; ?>>Un approve</option>
                                                                <option value="1" <?php echo $row["approve"]==1 ? 'selected': ''; ?>>Approve</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 d-flex justify-content-end">
                                                    <img src="<?php echo $row["image"]; ?>"/>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="updateTestimonial">Update <?php echo $row["name"]; ?>
                                                    </button>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <?php require_once('include/footer.php'); ?>
    </div>
</div>

<?php require_once('include/js.php'); ?>
</body>
</html>

<!--  Add Testimonials-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Testimonials</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="name">Name:</label>
                            <input class="form-control" id="name" name="name"
                                   type="text"
                                   placeholder="Enter Name" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="client">Made:</label>
                            <input class="form-control" id="client" name="client"
                                   type="text"
                                   placeholder="Enter Made" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="model">Model:</label>
                            <input class="form-control" id="model" name="model"
                                   type="text"
                                   placeholder="Enter Model" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="year">Year:</label>
                            <input class="form-control" id="year" name="year"
                                   type="text"
                                   placeholder="Enter Year" required/>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="message">Message:</label>
                            <textarea class="form-control" rows="7" id="message"
                                      name="message"
                                      placeholder="Enter Message"
                                      required></textarea>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="image">Image:</label>
                            <div class="custom-file">
                                <input class="custom-file-input" id="image" name="image" type="file"
                                       aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                    file</label>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="approve">Approve:</label>
                            <select class="form-control" id="approve" name="approve" required>
                                <option value="0">Un approve</option>
                                <option value="1">Approve</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" name="addTestimonial">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>