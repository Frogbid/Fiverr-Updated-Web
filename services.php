<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Services | Carcentive</title>
    <?php require_once('include/css.php'); ?>
    <?php require_once('include/update.php'); ?>
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
    <?php require_once('include/main_header.php'); ?>
    <?php require_once('include/side_bar.php'); ?>
    <!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
        <div class="breadcrumb">
            <h1>Services</h1>
            <ul>
                <li><a href="services.php">Services page</a></li>
                <li>Services</li>
            </ul>
        </div>
        <div class="text-right mb-4">
            <a href="../service.php" target="_blank" class="btn btn-outline-primary btn-rounded">
                See View
            </a>
        </div>
        <div class="separator-breadcrumb border-top">
        </div><!-- end of main-content -->

        <!-- start of main-heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">First Row Data</div>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_1'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_1">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_2'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_2">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_3'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_3">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-heading -->

        <!-- start of main-heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Second Row Data</div>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_4'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_4">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_5'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_5">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_6'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_6">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-heading -->

        <!-- start of main-heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Third Row Data</div>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_7'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-12">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_7">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-heading -->

        <!-- start of main-heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Fourth Row Data</div>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_8'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_8">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_9'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_9">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-heading -->

        <!-- start of main-heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Fifth Row Data</div>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM page_data where page_name='service_10'";
                            $result = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-12">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title"
                                                           type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" name="service_data_10">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-heading -->


    </div>


    <?php require_once('include/footer.php'); ?>
</div>
</div>

<?php require_once('include/js.php'); ?>
</body>
</html>