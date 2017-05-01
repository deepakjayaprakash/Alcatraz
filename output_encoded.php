<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Alcatraz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    
    
 
    
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
    
    
</head>
    
    
    

<?php
    $username= $_GET['username'];
    $email= $_GET['email'];
    $password= $_GET['password'];
    $address= $_GET['address'];
    $hash= $_GET['hash'];

?>


<script>

var auth;
var client_id="@hBKqnEf8shAADJQ";
var client_secret_key="zj7ZObhErbWgc0nS";
    
var e_username="<?php echo  $form_name= $_GET['username'];?>";
var e_password="<?php echo  $form_name= $_GET['password'];?>";
var e_address="<?php echo  $form_name= $_GET['address'];?>";
var e_email="<?php echo  $form_name= $_GET['email'];?>";
var hash="<?php echo  $form_name= $_GET['hash'];?>";
    


    
    function decrypt(){
       // alert(hash);
        var d_username = CryptoJS.AES.decrypt(e_username, hash.toString());
      
        
        //alert(hash.toString());
       // alert(d_username.toString(CryptoJS.enc.Utf8));
      /*  var d_email=CryptoJS.AES.decrypt(e_email, hash).toString(CryptoJS.enc.Utf8);
        var d_password=CryptoJS.AES.decrypt(e_password, hash).toString(CryptoJS.enc.Utf8);
        var d_address=CryptoJS.AES.decrypt(e_address, hash).toString(CryptoJS.enc.Utf8);*/
        
    }
    
    

decrypt();        
    
    

   
    
</script>
    
    <body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Alcatraz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">DESIGN</a></li>
        <li><a href="#view">VIEW</a></li>
        <li><a href="#pricing">DEMO</a></li>
        <li><a href="#contact">GITHUB</a></li>
      </ul>
    </div>
  </div>
</nav>
        
        <br><br><br>
<h1>Encryption required</h1>
<div>

    Username Encrypted: <p id="e_username"></p>
    Email Encrypted: <p id="e_email"></p>
    Password Encrypted: <p id="e_password"></p>
    Adress Encrypted: <p id="e_address"></p>
    

</div>

<script type="text/javascript">
    document.getElementById("e_username").innerHTML = e_username;
    document.getElementById("e_email").innerHTML = e_email;
    document.getElementById("e_password").innerHTML = e_password;
    document.getElementById("e_address").innerHTML = e_address;
</script>

<!--
<div>

    Username Decrypted: <p id="d_username"></p>
    Email Decrypted: <p id="d_email"></p>
    Password Decrypted: <p id="d_password"></p>
    Adress Decrypted: <p id="d_address"></p>
    

</div>
-->
<!--
<script type="text/javascript">
    document.getElementById("d_username").innerHTML = d_username;
    document.getElementById("d_email").innerHTML = d_email;
    document.getElementById("d_password").innerHTML = d_password;
    document.getElementById("d_address").innerHTML = d_address;
</script>
-->

    </body>
</html>

