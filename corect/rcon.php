<?php

if(isset($_POST['signup'])){

$conn=mysqli_connect('localhost','root','','pound');
$name=$_POST['name'];
$nic=$_POST['nic'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$addre=$_POST['addre'];
$pnumber=$_POST['pnumber'];
$duplicate =mysqli_query($conn,"SELECT * FROM reglog1 WHERE uname='$uname' or email = '$email'");
if (mysqli_num_rows($duplicate)>0) {
	// code...
	echo "<script> alert('User name and Password Already Taken by someone'); </script>";
	header('Location: LoginForm.html');


}
else{
	if ($password == $cpassword) {
		// code...
		$sql4="INSERT INTO reglog1(name, nic,uname, email,password,addre,pnumber) VALUES('$name','$nic','$uname','$email','$password','$addre','$pnumber')";
		mysqli_query($conn,$sql4);
		echo "<script> alert('Registration successfull'); </script>";
		header('Location: LoginForm.html');
	}
	else{
		echo "<script > alert('Password not matched !'); </script>";
		header('Location: register.php');
	
	}
}



}

?>