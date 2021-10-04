<?php

//update home-main-heading
if (isset($_POST['home_main_heading'])) {

    $main_title = mysqli_real_escape_string($connect, $_POST['main_title']);
    $sub_title = mysqli_real_escape_string($connect, $_POST['sub_title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $feature_card_1 = mysqli_real_escape_string($connect, $_POST['feature_card_1']);
    $feature_card_2 = mysqli_real_escape_string($connect, $_POST['feature_card_2']);
    $feature_card_3 = mysqli_real_escape_string($connect, $_POST['feature_card_3']);

    $sql = "UPDATE `home_main_heading` SET `main_title`='$main_title',`sub_title`='$sub_title',`description`='$description',`feature_card_1`='$feature_card_1',`feature_card_2`='$feature_card_2',`feature_card_3`='$feature_card_3' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update home-sub-heading
if (isset($_POST['home_sub_heading'])) {

    $main_title = mysqli_real_escape_string($connect, $_POST['main_title']);
    $sub_title = mysqli_real_escape_string($connect, $_POST['sub_title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);

    $image = $_FILES['image']['name'];
    $target = "subheading/" . basename($image);

    $sql = "UPDATE `home_sub_heading` SET `main_title`='$main_title',`sub_title`='$sub_title',`description`='$description',`image`='$target' WHERE `id`=1";

    if (mysqli_query($connect, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update cards-on-homepage-1
if (isset($_POST['home_card_1'])) {

    $card_title_1 = mysqli_real_escape_string($connect, $_POST['card_title_1']);
    $card_description_1 = mysqli_real_escape_string($connect, $_POST['card_description_1']);


    $sql = "UPDATE `home_card` SET `card_title_1`='$card_title_1',`card_description_1`='$card_description_1' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update cards-on-homepage-2
if (isset($_POST['home_card_2'])) {

    $card_title_2 = mysqli_real_escape_string($connect, $_POST['card_title_2']);
    $card_description_2 = mysqli_real_escape_string($connect, $_POST['card_description_2']);


    $sql = "UPDATE `home_card` SET `card_title_2`='$card_title_2',`card_description_2`='$card_description_2' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update cards-on-homepage-3
if (isset($_POST['home_card_3'])) {

    $card_title_3 = mysqli_real_escape_string($connect, $_POST['card_title_3']);
    $card_description_3 = mysqli_real_escape_string($connect, $_POST['card_description_3']);


    $sql = "UPDATE `home_card` SET `card_title_3`='$card_title_3',`card_description_3`='$card_description_3' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update cards-on-homepage-4
if (isset($_POST['home_card_4'])) {

    $card_title_4 = mysqli_real_escape_string($connect, $_POST['card_title_4']);
    $card_description_4 = mysqli_real_escape_string($connect, $_POST['card_description_4']);


    $sql = "UPDATE `home_card` SET `card_title_4`='$card_title_4',`card_description_4`='$card_description_4' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update social-links-1
if (isset($_POST['social_links_1'])) {

    $fb_link = mysqli_real_escape_string($connect, $_POST['fb_link']);

    $sql = "UPDATE `social_links` SET `fb_link`='$fb_link' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update social-links-2
if (isset($_POST['social_links_2'])) {

    $twitter_link = mysqli_real_escape_string($connect, $_POST['twitter_link']);

    $sql = "UPDATE `social_links` SET `twitter_link`='$twitter_link' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update social-links-3
if (isset($_POST['social_links_3'])) {

    $insta_link = mysqli_real_escape_string($connect, $_POST['insta_link']);

    $sql = "UPDATE `social_links` SET `insta_link`='$insta_link' WHERE `id`=1";

    if (mysqli_query($connect, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update testimonials
if (isset($_POST['updateTestimonial'])) {

    $id=mysqli_real_escape_string($connect, $_POST['id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $client = mysqli_real_escape_string($connect, $_POST['client']);
    $model = mysqli_real_escape_string($connect, $_POST['model']);
    $year = mysqli_real_escape_string($connect, $_POST['year']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    $approve = mysqli_real_escape_string($connect, $_POST['approve']);

    $image = $_FILES['image']['name'];
    $target = "testimonial/" . basename($image);

    if($image!=''){
        $sql = "UPDATE `testimonials` SET `name`='$name',`client`='$client',`model`='$model',`year`='$year',`message`='$message',`approve`='$approve',`image`='$target' WHERE `id`='$id'";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }
    else
        $sql = "UPDATE `testimonials` SET `name`='$name',`client`='$client',`model`='$model',`year`='$year',`message`='$message',`approve`='$approve' WHERE `id`='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: testimonial.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update testimonials
if (isset($_POST['updateClient'])) {

    $id=mysqli_real_escape_string($connect, $_POST['id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);

    $image = $_FILES['image']['name'];
    $target = "clients/" . basename($image);

    if($image!=''){
        $sql = "UPDATE `home_clients` SET `name`='$name',`image`='$target' WHERE `id`='$id'";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }
    else
        $sql = "UPDATE `home_clients` SET `name`='$name' WHERE `id`='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: clients.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}