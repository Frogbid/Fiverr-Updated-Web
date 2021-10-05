<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Consultation Form Data | Carcentive</title>
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
                <h1>Request a Consultation</h1>
                <ul>
                    <li><a href="consultation_form.php">Consultation Form Data</a></li>
                    <li>Request a Consultation</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top">
            </div><!-- end of main-content -->
            <?php if (!isset($_GET['id'])) { ?>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Consultation Form Data List</h4>
                                <button class="btn btn-primary float-right mb-4" type="button" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Add Consultation Data
                                </button>
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered"
                                           id="zero_configuration_table"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Purchase Type</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Monthly Budget</th>
                                            <th>Down Payment Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- start of social-link -->
                                        <?php
                                        $sql = "SELECT * FROM request_consultation_form order by id desc";
                                        $result = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $sl = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $sl; ?></td>
                                                    <td><?php echo $row["first_name"]; ?></td>
                                                    <td><?php echo $row["last_name"]; ?></td>
                                                    <td><?php echo $row["purchase_type"]; ?></td>
                                                    <td><?php echo $row["email"]; ?></td>
                                                    <td><?php echo $row["date"]; ?></td>
                                                    <td><?php echo $row["monthly_budget"]; ?></td>
                                                    <td><?php echo $row["down_payment_amount"]; ?></td>
                                                    <td class="text-center">
                                                        <a href="consultation_form.php?id=<?php echo $row["id"]; ?>"><i
                                                                    class="nav-icon text-primary i-Pen-5"></i></a>
                                                        <a href="include/delete.php?consultation_form_id=<?php echo $row["id"]; ?>"><i
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
                                <h4 class="card-title mb-3">Update Consultation Form Data</h4>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <?php
                                        $sql = "SELECT * FROM request_consultation_form where id='{$_GET['id']}'";
                                        $result = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>

                                                <div class="row p-4">
                                                    <div class="col-md-2 form-group mb-3">
                                                        <label for="id">ID:</label>
                                                        <input class="form-control" id="id" name="id"
                                                               type="text"
                                                               placeholder="Enter id"
                                                               value="<?php echo $row["id"]; ?>" readonly/>
                                                    </div>
                                                    <div class="col-md-5 form-group mb-3">
                                                        <label for="first_name">First Name:</label>
                                                        <input class="form-control" id="first_name" name="first_name"
                                                               type="text"
                                                               placeholder="Enter First Name"
                                                               value="<?php echo $row["first_name"]; ?>" required/>
                                                    </div>
                                                    <div class="col-md-5 form-group mb-3">
                                                        <label for="last_name">Last Name:</label>
                                                        <input class="form-control" id="last_name" name="last_name"
                                                               type="text"
                                                               placeholder="Enter Last Name"
                                                               value="<?php echo $row["last_name"]; ?>" required/>
                                                    </div>
                                                    <div class="col-md-12 form-group mb-3">
                                                        <label for="purchase_type">Purchase Type:</label>
                                                        <select class="form-control" id="purchase_type"
                                                                name="purchase_type" required>
                                                            <option value="">Choose Type of Purchase</option>
                                                            <option value="Dealership Purchase" <?php echo $row["purchase_type"] == "Dealership Purchase" ? 'selected' : ''; ?>>
                                                                Dealership Purchase
                                                            </option>
                                                            <option value="Private Purchase" <?php echo $row["purchase_type"] == "Private Purchase" ? 'selected' : ''; ?>>
                                                                Private Purchase
                                                            </option>
                                                            <option value="Lease a Car" <?php echo $row["purchase_type"] == "Lease a Car" ? 'selected' : ''; ?>>
                                                                Lease a Car
                                                            </option>
                                                            <option value="Lease Buyout" <?php echo $row["purchase_type"] == "Lease Buyout" ? 'selected' : ''; ?>>
                                                                Lease Buyout
                                                            </option>
                                                            <option value="Lease Transfer" <?php echo $row["purchase_type"] == "Lease Transfer" ? 'selected' : ''; ?>>
                                                                Lease Transfer
                                                            </option>
                                                            <option value="Sell a Car" <?php echo $row["purchase_type"] == "Sell a Car" ? 'selected' : ''; ?>>
                                                                Sell a Car
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="email">Email:</label>
                                                        <input class="form-control" id="email" name="email"
                                                               type="email"
                                                               placeholder="Enter Email"
                                                               value="<?php echo $row["email"]; ?>" required/>
                                                    </div>
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="date">Date:</label>
                                                        <input class="form-control" id="date" name="date"
                                                               type="datetime-local"
                                                               placeholder="Enter Date Time" value="<?php echo date("Y-m-d\TH:i:s", strtotime($row["date"])); ?>" required/>
                                                    </div>
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="monthly_budget">Monthly Budget:</label>
                                                        <input class="form-control" id="monthly_budget"
                                                               name="monthly_budget"
                                                               type="text"
                                                               placeholder="Enter Monthly Budget"
                                                               value="<?php echo $row["monthly_budget"]; ?>" required/>
                                                    </div>
                                                    <div class="col-md-6 form-group mb-3">
                                                        <label for="down_payment_amount">Down Payment Amount:</label>
                                                        <input class="form-control" id="down_payment_amount"
                                                               name="down_payment_amount"
                                                               type="text"
                                                               placeholder="Enter Down Payment Amount"
                                                               value="<?php echo $row["down_payment_amount"]; ?>"
                                                               required/>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary" name="updateConsultationFormData">
                                                            Update <?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?>
                                                        </button>
                                                    </div>
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Consultation Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="first_name">First Name:</label>
                            <input class="form-control" id="first_name" name="first_name"
                                   type="text"
                                   placeholder="Enter First Name" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="last_name">Last Name:</label>
                            <input class="form-control" id="last_name" name="last_name"
                                   type="text"
                                   placeholder="Enter Last Name" required/>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="purchase_type">Purchase Type:</label>
                            <select class="form-control" id="purchase_type" name="purchase_type" required>
                                <option value="">Choose Type of Purchase</option>
                                <option value="Dealership Purchase">Dealership Purchase</option>
                                <option value="Private Purchase">Private Purchase</option>
                                <option value="Lease a Car">Lease a Car</option>
                                <option value="Lease Buyout">Lease Buyout</option>
                                <option value="Lease Transfer">Lease Transfer</option>
                                <option value="Sell a Car">Sell a Car</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="email">Email:</label>
                            <input class="form-control" id="email" name="email"
                                   type="email"
                                   placeholder="Enter Email" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="date">Date:</label>
                            <input class="form-control" id="date" name="date"
                                   type="datetime-local"
                                   placeholder="Enter Date Time" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="monthly_budget">Monthly Budget:</label>
                            <input class="form-control" id="monthly_budget" name="monthly_budget"
                                   type="text"
                                   placeholder="Enter Monthly Budget" required/>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="down_payment_amount">Down Payment Amount:</label>
                            <input class="form-control" id="down_payment_amount" name="down_payment_amount"
                                   type="text"
                                   placeholder="Enter Down Payment Amount" required/>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" name="addConsultationFormData">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>