<!DOCTYPE html>
<html>
<title >customer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body class="w3-light-grey">
    <header class="header">
      <img src="./assets/logo.jpg" />
      <div class="nav-bar-container">
        <nav class="nav justify-content-end gap-2" id="nav-item"></nav>
      </div>
    </header>
</br>
<div id="customer" class="form-container">


<div class="form-container-left">

     
    
    <h2 id="customer">Registration  Details</h2>
<form class=" card-body cardbody-color p-lg-5" action="rccon.php" method="POST" autocomplete="off">
<table>
<tr>
<td>Customer Name
</td>
<td><input class="form-control" type="text" name="name" id="name" required>
</td>
</tr>

<tr>
<td>Customer NIC 
</td>
<td><input class="form-control" type="text" name="nic" id="nic" required>
</td>
</tr>

<tr>
<td>User Name
</td>
<td><input class="form-control" type="text" name="uname" id="uname" required>
</td>
</tr>

<tr>
<td>Email
</td>
<td><input class="form-control" type="email" name="email" id="email" required>
</td>
</tr>

<tr>
<td>Password
</td>
<td><input class="form-control" type="Password" name="password" id="password" required>
</td>
</tr>

<tr>
<td>Comfirm Password
</td>
<td><input class="form-control" type="Password" name="cpassword" id="cpassword" required>
</td>
</tr>



<tr>
<td>Address</td>
<td><textarea class="form-control" rows="5" cols="30" name="addre" id="addre" required>
</textarea>
</td>
</tr>

<tr>
<td>Mobile Number
</td>
<td><input class="form-control" type="text" name="pnumber" id="pnumber" required>
</td>
</tr>




<tr><td></td>
<td><input class="button background" type ="submit"value ="Sign Up" name="signup" id="signup" href ="log.php"> 

</td>

</tr>
</table>
</form>

<script type="text/javascript">
    var missingFieldCounter = 0; // we count the number of field missing
jQuery('#signup').on('click',function(){
    $(':input[required]').each(function() // for each input that contains "required" attribute
    {
        if($(this).val() == "") // if the required input is not filled
        {
            missingFieldCounter+=1; 
            $(this).after("<b>You have to fill all the fields</b>"); // we print a message after the input
        }
    });

    if(missingFieldCounter == 0) // if the counter has never been incremented (every field is filled)
    {
        jQuery('form').submit();
    }
});

</script>




</div>

</br>
<div class="form-container-right">
        <video width="100%" height="100%" autoplay muted loop>
          <source src="./assets/gold.mp4" type="video/mp4" />
          Your browser does not support HTML video.
        </video>
      </div>


      <div  class="footer"id="footer" >
Copyright &copy; Pawnning System <br>
 <a href="home">Siyapath finance.com</a>
</div>
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