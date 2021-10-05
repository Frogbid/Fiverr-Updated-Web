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

    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $client = mysqli_real_escape_string($connect, $_POST['client']);
    $model = mysqli_real_escape_string($connect, $_POST['model']);
    $year = mysqli_real_escape_string($connect, $_POST['year']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    $approve = mysqli_real_escape_string($connect, $_POST['approve']);

    $image = $_FILES['image']['name'];
    $target = "testimonial/" . basename($image);

    if ($image != '') {
        $sql = "UPDATE `testimonials` SET `name`='$name',`client`='$client',`model`='$model',`year`='$year',`message`='$message',`approve`='$approve',`image`='$target' WHERE `id`='$id'";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else
        $sql = "UPDATE `testimonials` SET `name`='$name',`client`='$client',`model`='$model',`year`='$year',`message`='$message',`approve`='$approve' WHERE `id`='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: testimonial.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update testimonials
if (isset($_POST['updateClient'])) {

    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);

    $image = $_FILES['image']['name'];
    $target = "clients/" . basename($image);

    if ($image != '') {
        $sql = "UPDATE `home_clients` SET `name`='$name',`image`='$target' WHERE `id`='$id'";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else
        $sql = "UPDATE `home_clients` SET `name`='$name' WHERE `id`='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: clients.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update consultation page data
if (isset($_POST['consultation_page_data'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $bullet_1 = mysqli_real_escape_string($connect, $_POST['bullet_1']);
    $bullet_2 = mysqli_real_escape_string($connect, $_POST['bullet_2']);
    $bullet_3 = mysqli_real_escape_string($connect, $_POST['bullet_3']);
    $bullet_4 = mysqli_real_escape_string($connect, $_POST['bullet_4']);

    $image = $_FILES['image']['name'];
    $target = "car/" . basename($image);

    if ($image != '') {
        $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description',`bullet_1`='$bullet_1',`bullet_2`='$bullet_2',`bullet_3`='$bullet_3',`bullet_4`='$bullet_4',`image`='$target' where page_name='consultation'";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else
        $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description',`bullet_1`='$bullet_1',`bullet_2`='$bullet_2',`bullet_3`='$bullet_3',`bullet_4`='$bullet_4' where page_name='consultation'";

    if (mysqli_query($connect, $sql)) {
        header('Location: consultation.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update consultation form data
if (isset($_POST['updateConsultationFormData'])) {

    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
    $purchase_type = mysqli_real_escape_string($connect, $_POST['purchase_type']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $date = mysqli_real_escape_string($connect, $_POST['date']);
    $monthly_budget = mysqli_real_escape_string($connect, $_POST['monthly_budget']);
    $down_payment_amount = mysqli_real_escape_string($connect, $_POST['down_payment_amount']);

    $sql = "UPDATE `request_consultation_form` SET `first_name`='$first_name',`last_name`='$last_name',`purchase_type`='$purchase_type',`email`='$email',`date`='$date',`monthly_budget`='$monthly_budget',`down_payment_amount`='$down_payment_amount' WHERE `id`='$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: consultation_form.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 1
if (isset($_POST['service_data_1'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_1'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 2
if (isset($_POST['service_data_2'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_2'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 3
if (isset($_POST['service_data_3'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_3'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 4
if (isset($_POST['service_data_4'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_4'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 5
if (isset($_POST['service_data_5'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_5'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 6
if (isset($_POST['service_data_6'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_6'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 7
if (isset($_POST['service_data_7'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_7'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 8
if (isset($_POST['service_data_8'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_8'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 9
if (isset($_POST['service_data_9'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_9'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//update service page data 10
if (isset($_POST['service_data_10'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);


    $sql = "UPDATE `page_data` SET `title`='$title',`description`='$description' where page_name='service_10'";

    if (mysqli_query($connect, $sql)) {
        header('Location: services.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}