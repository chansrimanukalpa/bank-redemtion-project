<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pound";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['Cnic'];
$status =$_GET['status'];
$q="update ticket set approve ='$status' where Cnic= '$id'";
mysqli_query($conn, $q);

header("Location: approveticket.php");
?>