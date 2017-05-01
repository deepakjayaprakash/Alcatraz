

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
    $form_name= $_GET['form_name'];
    $address= $_GET['address'];

?>


<script>


var client_id="@hBKqnEf8shAADJQ";
var client_secret_key="zj7ZObhErbWgc0nS";
    
var formname="<?php echo  $form_name= $_GET['form_name'];?>";
var username="<?php echo  $form_name= $_GET['username'];?>";
var password="<?php echo  $form_name= $_GET['password'];?>";
var address="<?php echo  $form_name= $_GET['address'];?>";
var email="<?php echo  $form_name= $_GET['email'];?>";
    
    
    function isAuthenticationRequired(){
        var auth;
        var auth2;
        var reply,reply_JSON;
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                reply=this.responseText;
               
                reply_JSON=JSON.parse(reply);
                
                for( var i in reply_JSON.pages){
                   
                    if(pagename==reply_JSON.pages[i].name){
                      
                        auth=reply_JSON.pages[i].auth_required;
                       
                        break;
                    }
                   
                }
                
               
                
            }
        };
        xmlhttp.open("GET", "auth_required.txt", true);
        xmlhttp.send();
    
       
    }
    


    
     function getHash(){
     
      var param=username+password+client_id;
      // alert(param);  
       var hash = 0;
        if (param.length == 0) return hash;
        for (i = 0; i < param.length; i++) {
            char = param.charCodeAt(i);
            hash = ((hash<<5)-hash)+char;
            hash = hash & hash; // Convert to 32bit integer
           
            }
         if(hash<0)
             hash=hash*-1;
         
        
         return hash;
            
     
     }
    
    
    function encrypt(){
        var e_username=CryptoJS.AES.encrypt(username, hash.toString());
       // alert(e_username);
        var e_email=CryptoJS.AES.encrypt(email, hash.toString());
        var e_password=CryptoJS.AES.encrypt(password, hash.toString());
        var e_address=CryptoJS.AES.encrypt(address, hash.toString());
        
        
        var d_username = CryptoJS.AES.decrypt(e_username, hash.toString());
        //alert(hash.toString());
       // alert(d_username.toString(CryptoJS.enc.Utf8));
       window.location="output_encoded.php?username="+e_username+"&email="+e_email+"&address="+e_address+"&password="+e_password+"&hash="+hash;
       
    }
    
    
isAuthenticationRequired();
   
if(formname=="form1"){
var hash=getHash();
//alert(hash);
encrypt();        
}
    
    
    

   
    
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
    
    
<br><br><br><br>
<h1>Encryption not required</h1>
<div>

    Username : <span id="username"></span><br>
    Email : <span id="email"></span><br>
    Password : <span id="password"></span><br>
    Adress : <span id="address"></span><br>
    

</div>

<script type="text/javascript">
    document.getElementById("username").innerHTML = username;
    document.getElementById("email").innerHTML = email;
    document.getElementById("password").innerHTML = password;
    document.getElementById("address").innerHTML = address;
</script>

</body>
</html>





