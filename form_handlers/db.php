<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "defense";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    # code...
    die("Connection failed: ". mysqli_connect_error());
}
// echo "connected successfully";

