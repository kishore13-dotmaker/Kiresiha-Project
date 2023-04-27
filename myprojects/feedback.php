<?php
include "db.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $yourmessage = $_POST["yourmessage"];


    $sql = "INSERT INTO feedback(name, email, yourmessage) VALUES ('$name','$email','$yourmessage')";
    if ($conn->query($sql)) {
        header("location:thanks.php");
    } else {
        echo "not stored";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car rental</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <!--fav-icon-->
    <link rel="shortcut icon" href="images/fav-icon.png" />
    <!--using fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>

    <div class="form-container">
        <form action="#" method="post">
            <h3>Give Your Feedback</h3>
            <label for="">Name</label>
            <input type="text" placeholder="enter ur name" name="name" id="name" required="required">
            <label for="">email</label>
            <input type="email" placeholder="enter ur email" name="email" id="email" required="required">
            <label for="">your message</label>
            <input type="text" name="yourmessage" id="yourmessage" cols="20" rows="8" placeholder="Your Message" required="required"></input>

            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
    </div>
</body>