<?php
$hostname = "localhost";
$name = "root";
$pass = "";
$database = "signup";
$conn = mysqli_connect($hostname, $name, $pass, $database);
if ($conn) {
    echo "";
} else {
    echo "connection unsuccessful";
}
