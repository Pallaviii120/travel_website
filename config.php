<?php 

$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "travel";

$connect = mysqli_connect($server, $user, $pass, $database);

if (!$connect) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
