New tickets to proceeds..
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

//fetch data from database
$sql = "SELECT * FROM ticket where status= 1";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//display data in HTML form
?>

<!DOCTYPE html>
<html>
<head>
<title>Manager Approve</title>
<style>
/* CSS style for the form */
body {
font-family: Arial, sans-serif;
background-color: #f1f1f1;
}
h2 {
text-align: center;
margin-top: 50px;
}
table {
margin: auto;
border-collapse: collapse;
width: 80%;
border: 2px solid #ddd;
background-color: white;
}
th, td {
text-align: left;
padding: 12px;
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
</style>
<link rel="stylesheet" href="w3.css">
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="LoginForm.css" />
    <link rel="stylesheet" href="./Layout.css" />

</head>
<body>
	<header class="header">
      <img src="./assets/logo.jpg" />
      <div class="nav-bar-container">
        <nav class="nav justify-content-end gap-2" id="nav-item"></nav>
      </div>
    </header>
<h2>New Tickets</h2>
<table>
<thead>
<tr>
<th>CUSTOMER NIC</th>	
<th>TIKET NUMBER</th>
<th>BRANCH CODE</th>
<th>Branch Name</th>
<th>PAYMENT</th>
<th>ARTICAL TYPE</th>
<th>ARTICAL AMOUNT</th>
<th>WEIGHT</th>
<th>CURRENT DATE</th>
<th>KARATAGE</th>
<th>Status</th>
<th>Approve</th>
<th>Assign Driver</th>


</tr>
</thead>
<tbody>
<?php foreach ($data as $row) {?>
<tr>
<td><?php echo $row['Cnic'] ?></td>
<td><?php echo $row['ticketnum'] ?></td>
<td><?php echo $row['branchcode'] ?></td>
<td><?php echo $row['branchNam'] ?></td>
<td><?php echo $row['payment'] ?></td>
<td><?php echo $row['articaltype'] ?></td>
<td><?php echo $row['articalamount'] ?></td>
<td><?php echo $row['weight'] ?></td>
<td><?php echo $row['cdate'] ?></td>
<td><?php echo $row['karatage'] ?></td>
<td><?php 
if($row['status']==1){
  echo "Enable";

}?>
  
</td>
<td ><div class="btn-container button background"><?php 
if($row['approve']==0){
	
	echo '<p><a href="approve.php?Cnic='.$row['Cnic'].'&status=1">Refuse</a></p>';
}else{
	echo '<p><a href="approve.php?Cnic='.$row['Cnic'].'&status=0">Approve</a></p>';
	
}

?></div></td>
<td><?php echo $row['assg_driver']?></td>


</tr>
<?php } ?>
</tbody>
</table>
<br>
<br>
<br>
<br>
<br>
<div  class="footer"id="footer" >
Copyright &copy; Pawnning System <br>
 <a href="home">Siyapath finance.com</a>
</div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="Layout.js"></script>
    <script src="Slider.js"></script>
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>

<?php
//close connection
mysqli_close($conn);
?>