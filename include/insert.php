<?php
//insert testimonial
if (isset($_POST['addTestimonial'])) {

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $client = mysqli_real_escape_string($connect, $_POST['client']);
    $model = mysqli_real_escape_string($connect, $_POST['model']);
    $year = mysqli_real_escape_string($connect, $_POST['year']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    $approve= mysqli_real_escape_string($connect, $_POST['approve']);

    $image = $_FILES['image']['name'];
    $target = "testimonial/".basename($image);

    $sql = "INSERT INTO `testimonials`(`name`, `client`, `model`, `year`, `message`, `image`, `approve`) VALUES ('$name','$client','$model','$year','$message','$target','$approve')";

    if (mysqli_query($connect, $sql)&&move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Location: testimonial.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//insert client
if (isset($_POST['addClient'])) {

    $name = mysqli_real_escape_string($connect, $_POST['name']);

    $image = $_FILES['image']['name'];
    $target = "clients/".basename($image);

    $sql = "INSERT INTO `home_clients`(`name`, `image`) VALUES ('$name','$target')";

    if (mysqli_query($connect, $sql)&&move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Location: clients.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//insert consultation form data
if (isset($_POST['addConsultationFormData'])) {

    $first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
    $purchase_type = mysqli_real_escape_string($connect, $_POST['purchase_type']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $date = mysqli_real_escape_string($connect, $_POST['date']);
    $monthly_budget = mysqli_real_escape_string($connect, $_POST['monthly_budget']);
    $down_payment_amount = mysqli_real_escape_string($connect, $_POST['down_payment_amount']);


    $sql = "INSERT INTO `request_consultation_form`(`first_name`, `last_name`, `purchase_type`, `email`, `date`, `monthly_budget`, `down_payment_amount`) VALUES ('$first_name','$last_name','$purchase_type','$email','$date','$monthly_budget','$down_payment_amount')";

    if (mysqli_query($connect, $sql)) {
        header('Location: consultation_form.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}