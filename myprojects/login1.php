<?php
include "db.php";
if (!empty($_SESSION["submit"])) {
    header("location: buy.php");
}
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $sql = "SELECT * from sign  where username='$username' and pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        header("location:buy.php");
        echo '<script>alert("Login Successfully")</script>';
    } else {
        echo '<script>alert("username or password is incorrect!! Login UnSuccess")</script>';
    }
}
?>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car rental</title>
    <link rel="stylesheet" type="text/css" href="login1.css">

    <!--using fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>
    <div class="box">
        <span class="borderline"></span>
        <form action="#" method="post">
            <form>
                <h2>Login</h2>

                <div class="inputBox">
                    <input type="text" placeholder="Username" name="username" id="username" required="required">
                    <i></i>



                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="pass" id="pass" required="required">
                    <i></i>

                </div>
                <div class="links">
                    <a href="./login1.php">Already a member login!</a>
                    <a href="./signup.php">Not a member?Sign Up</a>
                </div>

                <input type="submit" name="submit" id="submit" value="Login">

            </form>


    </div>
    </form>
</body>
</body>

</html>