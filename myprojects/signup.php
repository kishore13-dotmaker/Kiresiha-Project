<?php
include "db.php";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $gmail = $_POST["gmail"];
    $pass = $_POST["pass"];
    $resetpass = $_POST["resetpass"];

    $sql = "INSERT INTO sign(username, gmail, pass, resetpass) VALUES ('$username','$gmail','$pass','$resetpass')";
    if ($conn->query($sql)) {
        header("location:login1.php");
    } else {
        echo "not stored";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>sign up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" />
</head>

<body>

    <div class="wrapper">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="#" method="post">

            <input type="text" placeholder="User Name" name="username" id="username" required="required">

            <input type="text" placeholder="Gmail" name="gmail" id="gmail" required="required">
            <input type="password" placeholder="Password" name="pass" id="pass" required="required">

            <input type="password" placeholder="Re-enter Password" name="resetpass" id="resetpass" required="required">


            <div class="terms">
                <center><a href=""><input type="submit" name="submit" id="submit" value="SIGN UP"></center>
                <center><a style=" text-decoration: none;" href="login1.php"><strong>Thank you for logging me!</strong> </a> <a href="login1.php"></a></center>
                </a>
            </div>
    </div>
    </form>
</body>
</body>

</html>