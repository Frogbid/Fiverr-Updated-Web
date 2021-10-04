<?php
include ("connection.php");
//delete testimonial
if (isset($_GET['testimonial_id'])) {

    $id = mysqli_real_escape_string($connect, $_GET['testimonial_id']);
    $approve = mysqli_real_escape_string($connect, $_GET['approve']);

    $sql = "UPDATE `testimonials` SET `approve`='$approve' WHERE `id`='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../testimonial.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}