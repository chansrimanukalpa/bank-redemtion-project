<?php

if(isset($_POST['login'])){

$conn=mysqli_connect('localhost','root','','pound');
$unameemail=$_POST['unameemail'];
$password=$_POST['password'];

$sql5 =mysqli_query($conn,"SELECT * FROM reglog WHERE uname='$unameemail' or email = '$unameemail'");
$row1 = mysqli_fetch_assoc($sql5);
if (mysqli_num_rows($sql5)>0) {
	// code...
	if ($password==$row1["password"]) {
		// code...
		 $_SESSION['LoginForm']=true;
		 $_SESSION["id"] = $row1["id"];
		 header("Location: Layout.html");
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