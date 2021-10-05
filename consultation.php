<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Home | Carcentive</title>
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
            <h1>Request a Consultation</h1>
            <ul>
                <li><a href="consultation_form.php">Consultation Form Data</a></li>
                <li>Request a Consultation</li>
            </ul>
        </div>
        <div class="text-right mb-4">
            <a href="../quote.php" target="_blank" class="btn btn-outline-primary btn-rounded">
                See View
            </a>
        </div>
        <div class="separator-breadcrumb border-top">
        </div><!-- end of main-content -->

        <!-- start of main-heading -->
        <?php
        $sql = "SELECT * FROM page_data where page_name='consultation'";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Consultation Page Data</div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 form-group mb-3">
                                                    <label for="title">Title:</label>
                                                    <input class="form-control" id="title" name="title" type="text"
                                                           placeholder="Enter Main Title"
                                                           value="<?php echo $row["title"]; ?>" required/>
                                                </div>
                                                <div class="col-md-6 form-group mb-3">
                                                    <label for="image">Image:</label>
                                                    <div class="custom-file">
                                                        <input class="custom-file-input" id="image" name="image" type="file"
                                                               aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" rows="7" id="description"
                                                              name="description"
                                                              placeholder="Enter Description"
                                                              required><?php echo $row["description"]; ?></textarea>
                                                </div>

                                                <div class="col-md-6 form-group mb-3">
                                                    <label for="bullet_1">Bullet Point 1:</label>
                                                    <input class="form-control" id="bullet_1" name="bullet_1"
                                                           type="text"
                                                           placeholder="Enter Bullet Point 1"
                                                           value="<?php echo $row["bullet_1"]; ?>"/>
                                                </div>

                                                <div class="col-md-6 form-group mb-3">
                                                    <label for="bullet_2">Bullet Point 2:</label>
                                                    <input class="form-control" id="bullet_2" name="bullet_2"
                                                           type="text"
                                                           placeholder="Enter Bullet Point 2"
                                                           value="<?php echo $row["bullet_2"]; ?>"/>
                                                </div>

                                                <div class="col-md-6 form-group mb-3">
                                                    <label for="bullet_3">Bullet Point 3:</label>
                                                    <input class="form-control" id="bullet_3" name="bullet_3"
                                                           type="text"
                                                           placeholder="Enter Bullet Point 3"
                                                           value="<?php echo $row["bullet_3"]; ?>"/>
                                                </div>

                                                <div class="col-md-6 form-group mb-3">
                                                    <label for="bullet_4">Bullet Point 4:</label>
                                                    <input class="form-control" id="bullet_4" name="bullet_4"
                                                           type="text"
                                                           placeholder="Enter Bullet Point 4"
                                                           value="<?php echo $row["bullet_4"]; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <img src="<?php echo $row["image"]; ?>"/>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary" name="consultation_page_data">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
        <!-- end of main-heading -->

    </div>


    <?php require_once('include/footer.php'); ?>
</div>
</div>

<?php require_once('include/js.php'); ?>
</body>
</html>