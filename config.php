<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "coment";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>