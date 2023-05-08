






<!DOCTYPE html>
<html>
<head>
<title>TICKET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="Layout.css" />
    <link rel="stylesheet" href="LoginForm.css" />

</head>
<body >
   <!-- header -->
    <header class="header">
      <img src="./assets/logo.jpg" />
      <div class="nav-bar-container">
        <nav class="nav justify-content-end gap-2" id="nav-item"></nav>
      </div>
    </header>
<div class="form-container"  id="Tiket">

<div class="form-container-left">
  <h2 >Ticket</h2>
</br>
<form class="card-body cardbody-color p-lg-5" action="ticpross.php" method="POST">
<table>
<tr>
<td class="form-label">Customer NIC
</td>
 <?php
 $conn=mysqli_connect('localhost','root','','pound');
  $sql3="SELECT * FROM reglog1 ORDER BY id DESC LIMIT 1";
  $reslt=mysqli_query($conn,$sql3);
  $row=mysqli_fetch_array($reslt);
  ?>
<td><div class="mb-3"><input class="form-control" type="text" name="cnic" id="csnic" value="<?php echo $row['nic'];?>" placeholder="<?php echo $row['nic'];?>">
  <input class="form-control" type="hidden" name="chnic" id="csnic" value="<?php echo $row['nic'];?>" placeholder="<?php echo $row['nic'];?>">

  
</div></td>
</tr>
<tr>
<td class="form-label">Ticket Number
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="ticket">
</div></td>
</tr>

<tr>
<td class="form-label">Branch Code
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="BranchC">
</div></td>
</tr>

<tr>
<td class="form-label">Branch Name
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="BranchN">
</div></td>
</tr>


<tr>
<td class="form-label">Branch City
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="branchcity">
</div></td>
</tr>
<tr>
<td class="form-label">Payment
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="Payment">
</div></td>
</tr>

<tr>
<td class="form-label">Article Type
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="Article" >
</div></td>
</tr>

<tr>
<td class="form-label">Article Amount
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="Amount" >
</div></td>
</tr>

<tr>
<td class="form-label">Weight
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="Weight" >
</div></td>
</tr>

<tr>
<td class="form-label">Creation Date
</td>
<td><div class="mb-3"><input class="form-control" type="date" name="Cdate">
</div></td>
</tr>



<tr>
<td class="form-label">Karatage
</td>
<td><div class="mb-3"><input class="form-control" type="text" name="karatage">
</div></td>
</tr>

<tr><td></td>
<td ><div class="btn-container"><input class="button background" type ="submit"value ="Send" name="submit"> </div>
</td>

</tr>
</table>


</div>
</br>
<!-- footer -->
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
    <script src="Layout2.js"></script>
    <script src="Slider.js"></script>
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>

</body>
</html>