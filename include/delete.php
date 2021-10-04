<?php
include ("connection.php");

//delete testimonial
if (isset($_GET['testimonial_id'])) {

    $id = mysqli_real_escape_string($connect, $_GET['testimonial_id']);

    $sql = "DELETE FROM `testimonials` WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../testimonial.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//delete clients
if (isset($_GET['client_id'])) {

    $id = mysqli_real_escape_string($connect, $_GET['client_id']);

    $sql = "DELETE FROM `home_clients` WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../clients.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}