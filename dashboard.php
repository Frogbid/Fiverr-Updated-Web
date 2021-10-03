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
            <h1>Home</h1>
            <ul>
                <li><a href="dashboard.php">Main page</a></li>
                <li>Home</li>
            </ul>
        </div>
        <div class="text-right mb-4">
            <a href="../index.php" target="_blank" class="btn btn-outline-primary btn-rounded">
                See View
            </a>
        </div>
        <div class="separator-breadcrumb border-top">
        </div><!-- end of main-content -->

        <!-- start of main-heading -->
        <?php
        $sql = "SELECT * FROM home_main_heading";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Main Heading</div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="main_title">Main Title:</label>
                                            <input class="form-control" id="main_title" name="main_title" type="text"
                                                   placeholder="Enter Main Title"
                                                   value="<?php echo $row["main_title"]; ?>" required/>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="sub_title">Sub Title:</label>
                                            <input class="form-control" id="sub_title" name="sub_title" type="text"
                                                   placeholder="Enter Sub Title"
                                                   value="<?php echo $row["sub_title"]; ?>" required/>
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="description">Description:</label>
                                            <textarea class="form-control" rows="7" id="description" name="description"
                                                      placeholder="Enter Description"
                                                      required><?php echo $row["description"]; ?></textarea>
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="feature_card_1">Feature Card View 1:</label>
                                            <input class="form-control" id="feature_card_1" name="feature_card_1"
                                                   type="text"
                                                   placeholder="Enter Feature Card View 1"
                                                   value="<?php echo $row["feature_card_1"]; ?>"/>
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="feature_card_2">Feature Card View 2:</label>
                                            <input class="form-control" id="feature_card_2" name="feature_card_2"
                                                   type="text"
                                                   placeholder="Enter Feature Card View 2"
                                                   value="<?php echo $row["feature_card_2"]; ?>"/>
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="feature_card_3">Feature Card View 3:</label>
                                            <input class="form-control" id="feature_card_3" name="feature_card_3"
                                                   type="text"
                                                   placeholder="Enter Feature Card View 3"
                                                   value="<?php echo $row["feature_card_3"]; ?>"/>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary" name="home_main_heading">Submit</button>
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

        <!-- start of sub-heading -->
        <?php
        $sql = "SELECT * FROM home_sub_heading";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Sub Heading</div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="main_title">Main Title:</label>
                                                <input class="form-control" id="main_title" name="main_title"
                                                       type="text"
                                                       placeholder="Enter Main Title"
                                                       value="<?php echo $row["main_title"]; ?>" required/>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="sub_title">Sub Title:</label>
                                                <input class="form-control" id="sub_title" name="sub_title" type="text"
                                                       placeholder="Enter Sub Title"
                                                       value="<?php echo $row["sub_title"]; ?>" required/>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="image">Image:</label>
                                                <div class="custom-file">
                                                    <input class="custom-file-input" id="image" name="image" type="file"
                                                           aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="description">Description:</label>
                                                <textarea class="form-control" rows="7" id="description"
                                                          name="description"
                                                          placeholder="Enter Description"><?php echo $row["description"]; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex justify-content-end">
                                            <img src="<?php echo $row["image"]; ?>"/>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" name="home_sub_heading">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
        <!-- end of sub-heading -->

        <!-- start of cards-on-homepage -->
        <?php
        $sql = "SELECT * FROM home_card";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Cards On Home Page</div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="card_title_1">Title:</label>
                                                <input class="form-control" id="card_title_1" name="card_title_1"
                                                       type="text"
                                                       placeholder="Enter Title"
                                                       value="<?php echo $row["card_title_1"]; ?>"/>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="card_description_1">Description:</label>
                                                <textarea class="form-control" rows="7" id="card_description_1"
                                                          name="card_description_1"
                                                          placeholder="Enter Description"><?php echo $row["card_description_1"]; ?></textarea>
                                            </div>

                                            <button class="btn btn-primary" name="home_card_1">Submit</button>
                                        </form>
                                    </div>

                                    <div class="col-md-3">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="card_title_2">Title:</label>
                                                <input class="form-control" id="card_title_2" name="card_title_2"
                                                       type="text"
                                                       placeholder="Enter Title"
                                                       value="<?php echo $row["card_title_2"]; ?>"/>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="card_description_2">Description:</label>
                                                <textarea class="form-control" rows="7" id="card_description_2"
                                                          name="card_description_2"
                                                          placeholder="Enter Description"><?php echo $row["card_description_2"]; ?></textarea>
                                            </div>

                                            <button class="btn btn-primary" name="home_card_2">Submit</button>
                                        </form>
                                    </div>

                                    <div class="col-md-3">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="firstName1">Title:</label>
                                                <input class="form-control" id="card_title_3" name="card_title_3"
                                                       type="text"
                                                       placeholder="Enter Title"
                                                       value="<?php echo $row["card_title_3"]; ?>"/>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="card_description_3">Description:</label>
                                                <textarea class="form-control" rows="7" id="card_description_3"
                                                          name="card_description_3"
                                                          placeholder="Enter Description"><?php echo $row["card_description_3"]; ?></textarea>
                                            </div>

                                            <button class="btn btn-primary" name="home_card_3">Submit</button>
                                        </form>
                                    </div>

                                    <div class="col-md-3">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="card_title_4">Title:</label>
                                                <input class="form-control" id="card_title_4" name="card_title_4"
                                                       type="text"
                                                       placeholder="Enter Title"
                                                       value="<?php echo $row["card_title_4"]; ?>"/>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="card_description_4">Description:</label>
                                                <textarea class="form-control" rows="7" id="card_description_4"
                                                          name="card_description_4"
                                                          placeholder="Enter Description"><?php echo $row["card_description_4"]; ?></textarea>
                                            </div>

                                            <button class="btn btn-primary" name="home_card_4">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
        <!-- end of cards-on-homepage -->

        <!-- start of social-link -->
        <?php
        $sql = "SELECT * FROM social_links";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Social Accounts</div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="fb_link">Facebook Link:</label>
                                                <input class="form-control" id="fb_link" name="fb_link" type="url"
                                                       placeholder="Enter Facebook Link"
                                                       value="<?php echo $row["fb_link"]; ?>"/>
                                            </div>
                                            <button class="btn btn-primary" name="social_links_1">Submit</button>
                                        </form>
                                    </div>

                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="twitter_link">Twitter Link:</label>
                                                <input class="form-control" id="twitter_link" name="twitter_link"
                                                       type="url"
                                                       placeholder="Enter Twitter Link"
                                                       value="<?php echo $row["twitter_link"]; ?>"/>
                                            </div>

                                            <button class="btn btn-primary" name="social_links_2">Submit</button>
                                        </form>
                                    </div>

                                    <div class="col-md-4">
                                        <form action="" method="post">
                                            <div class="form-group mb-3">
                                                <label for="insta_link">Instagram Link:</label>
                                                <input class="form-control" id="insta_link" name="insta_link" type="url"
                                                       placeholder="Enter Instagram Link"
                                                       value="<?php echo $row["insta_link"]; ?>"/>
                                            </div>

                                            <button class="btn btn-primary" name="social_links_3">Submit</button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
        <!-- end of social-link -->

    </div>


    <?php require_once('include/footer.php'); ?>
</div>
</div>

<?php require_once('include/js.php'); ?>
</body>
</html>