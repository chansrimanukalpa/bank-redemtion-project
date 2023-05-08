<?php

if(isset($_POST['login'])){

$conn=mysqli_connect('localhost','root','','pound');
$unameemail=$_POST['unameemail'];
$password=$_POST['password'];

$sql5 =mysqli_query($conn,"SELECT * FROM reglog1 WHERE uname='$unameemail' or email = '$unameemail'");
$row1 = mysqli_fetch_assoc($sql5);
$sql6=mysqli_query($conn,"SELECT * FROM user WHERE uname='$unameemail'");
$row2 = mysqli_fetch_assoc($sql6);
$sql7=mysqli_query($conn,"SELECT * FROM manager WHERE uname='$unameemail'");
$row3 = mysqli_fetch_assoc($sql7);
if (mysqli_num_rows($sql5)>0) {
	// code...
	if ($password==$row1["password"]) {
		if ($password==$row2["password"]) {
			if ($password==$row3["password"]){
				header("Location: approveticket.php");

			}else{
				header("Location: currenttik.php");
			}
			
	}else{
		$cnic=$row1["nic"];
		$sql = "SELECT form_fill FROM ticket WHERE  Cnic= '$cnic'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row['form_fill']) {
   		 // User has completed the form, redirect to the appropriate page
   			 header("Location: userprofile.php");
    		 exit();
		} else {
    	// User has not completed the form, show the form
			header("Location: Layout2.html");
    		//include "form.php";
    		exit();
		}
			

	}
		
	}
	else{
		echo "<script> alert('Wrong Password'); </script>";
	}
	
}
else{
	echo "<script> alert('User Not Registered'); </script>";

	}
}

?>