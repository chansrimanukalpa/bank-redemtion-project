<?php
$name=$_POST['name'];
$nic=$_POST['nic'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$addre=$_POST['addre'];
$pnumber=$_POST['pnumber'];
$conn = new mysqli("localhost","root","","pound");
//check connection
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
$sql="INSERT INTO reglog1(name, nic,uname, email,password,addre,pnumber) VALUES('$name','$nic','$uname','$email','$password','$addre','$pnumber')";

if($conn->query($sql)===TRUE){
	echo "<script> alert('Values inserted ...')</script>";
	header('Location: LoginForm.html');
}
else{
	echo "Error in Inserting values".$conn->error;
	header('Location: register.php');
}


?>