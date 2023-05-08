<?php
session_start();

if(isset($_POST['submit'])){

$conn=mysqli_connect('localhost','root','','pound');
$Cnic= $_POST['cnic'];
$ticketn= $_POST['ticket'];
$BranchC= $_POST['BranchC'];
$BranchN= $_POST['BranchN'];
$Branchcity= $_POST['branchcity'];
$payment= $_POST['Payment'];
$articleT= $_POST['Article'];
$articleA= $_POST['Amount'];
$weight= $_POST['Weight'];
$creationDate= $_POST['Cdate'];
$karatage= $_POST['karatage'];
$_SESSION['cnic']=$Cnic;

$sql ="INSERT INTO ticket (Cnic,ticketnum,branchcode,branchNam,payment,articaltype,articalamount,weight,cdate,karatage,form_fill) VALUES('$Cnic','$ticketn','$BranchC','$BranchN','$payment','$articleT','$articleA','$weight','$creationDate','$karatage',1)";

$query =mysqli_query($conn,$sql);
if($query){
  //$sql3 = "UPDATE ticket SET form_fill =1  WHERE Cnic = $Cnic";
 // $result1 = mysqli_query($conn, $sql3);
  $sql2="INSERT INTO bank(branchC,branchNam,branchcity)VALUES('$BranchC','$BranchN','$Branchcity')";
  $result=mysqli_query($conn,$sql2);
  echo 'values inserted!! ';
  header('Location: userprofile.php');
}else{
  echo'There was an error in inserting values!!'.$conn->error;
}

}






//(Cnic,ticketnum,branchcode,branchNam,Branchcity,payment,articaltype,articalamount,weigh//t,cdate,karatage)


?>
