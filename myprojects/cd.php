<?php
include "db.php";
if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $mbnum = $_POST["mbnum"];
    $gender = $_POST["gender"];
    $carname = $_POST["carname"];
    $address = $_POST["address"];
    $pickupdate = $_POST["pickupdate"];
    $returndate = $_POST["returndate"];
    $aadharnumber = $_POST["aadharnumber"];
    $licensenumber = $_POST["licensenumber"];
    $country = $_POST["country"];

    $sql = "INSERT INTO customerdetails(firstname, lastname, dob, email,mbnum,gender,carname,address,pickupdate,returndate,aadharnum,licensenum,country) VALUES ('$firstname','$lastname','$dob','$email','$mbnum','$gender','$carname','$address','$pickupdate','$returndate','$aadharnum','$licensenum','$country')";
    if ($conn->query($sql)) {
        header("location:feedback.php");
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
    <title>customer details</title>
    <link rel="stylesheet" type="text/css" href="cd.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

<body>

    <div class="wrapper">

        <h1>Registrations</h1>
        <form action="#" method="post">
            <label>First Name</label>
            <input type="text" placeholder=" Enter Your First Name" name="firstname" id="firstname" required="required">

            <label>Last Name</label>
            <input type="text" placeholder="Enter Your Last Name" name="lastname" id="lastame" required="required">

            <label>Date Of Birth</label>
            <input type="date" placeholder="Enter Your Date of Birth" name="dob" id="dob" required="required">

            <label>Email</label>
            <input type="text" placeholder="Enter Your ****@email.com" name="email" id="email" required="required">

            <label>Mobile Number</label>
            <input type="varchar" placeholder="Enter Your Mobile Number" name="mbnum" id="mbnum" required="required">

            <label>Gender</label>
            <input type="text" placeholder="Female/Male/Transgender" name="gender" id="gender" required="required">

            <label>Rental Car Name </label>
            <input type="text" placeholder="Enter Your Rental Car Name" name="carname" id="carname" required="required">

            <label>Your Address</label>
            <input type="text" placeholder="Enter Your address" name="address" id="address" required="required">

            <label>Pickup-date</label>
            <input type="date" placeholder="Enter Your  pickup-date" name="pickupdate" id="pickupdate" required="required">

            <label>Return-date</label>
            <input type="date" placeholder="Enter Your return-date" name="returndate" id="returndate" required="required">

            <label> Aadhar Number</label>
            <input type="varchar" placeholder="Enter Your  Aadhar Number" name="aadharnuum" id="aadharnum" required="required">

            <label>License Number</label>
            <input type="varchar" placeholder="Enter Your License Number" name="licensenum" id="licensenum" required="required">

            <label>country</label>
            <input type="text" placeholder="Enter Your Country" name="country" id="country" required="required">




            <div class="terms">
                <input type="button" class="btn" id="btn" value="Go Back!" onclick="history.back()" /><br>
                <center><input type="submit" name="submit" id="submit" value="Done"></center>

                </a>
            </div>
    </div>
    </form>
</body>
</body>

</html>