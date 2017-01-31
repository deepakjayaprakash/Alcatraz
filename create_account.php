<!DOCTYPE html>
<html lang="en">
<head>
  
    <?php
        $myfile = fopen("data.txt","w");
        fclose($myfile);
    ?>
    
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
 
      <?php
    session_start(); //starts the session
    if($_SESSION['user']){ //checks if user is logged in
    }
    else{
        header("location:index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value
    ?>
    
    <script type="text/javascript">
        var s=new Array(7);
        var first= new Array(7),last= new Array(7);
        var diff = new Array(7);
        var i=new Array(7),d;
        for (var k = 0; k < 7; k++) {
          diff[k] = new Array(100);
            s[k]=new Array(100);
            i[k]=0;
        }

          function keypress (d,no) 
          {
            var x=document.getElementById(d);
            var t=document.getElementById("demo");
            var evt = event || e; // for trans-browser compatibility
                var charCode = evt.which || evt.keyCode;
            d=new Date();
            curr=d.getTime();
            if(charCode==8)
            {
                alert("backspace kyu dabaya be!");
                window.location.assign("create_account.php");

            }
            else if(charCode!=9)
            {

                x.innerHTML+=" "+curr;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "print.php?r=" + curr, true);
                xmlhttp.send();
            }   


          }

    </script>
    
    
</head>
    
    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
        <li><a href="keystroke.html">HOME</a></li>
        <li><a href="keystroke_demo.php">LOGIN</a></li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="container" align="center">
  <div class="reg" >
    
    <br><br><br>
    <p><b>Start typing the password in the input field below:</b>
    </p>
      
        <form action="validate.php" method="post"> 

        Enter a string 1:<br>
          <input type="text" onkeyup="javascript:keypress('date1',1)" name="id1"><p id="date1">0</p><br>

        Enter a string 2:<br>
          <input type="text" onkeyup="javascript:keypress('date2',2)"name="id2"><p id="date2">0</p><br>

        Enter a string 3:<br>
          <input type="text" onkeyup="javascript:keypress('date3',3)" name="id3"><p id="date3">0</p><br>
        Enter a string 4:<br>
          <input type="text" onkeyup="javascript:keypress('date4',4)" name="id4"><p id="date4">0</p><br>
        Enter a string 5:<br>
          <input type="text" onkeyup="javascript:keypress('date5',5)" name="id5"><p id="date5">0</p><br>
        Enter a string 6:<br>
          <input type="text" onkeyup="javascript:keypress('date6',6)" name="id6"><p id="date6">0</p><br>

          <button type="submit">Submit</button>
            </form>
      </div>
    </div>


    
    


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p style="background:#181a1b; color:white">Copyrights© reserved by CodeBlooded</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>




<?php
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("keystroke") or die("Cannot connect to database"); //Connect to database

  
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
    $bool = true;
  
  $query = mysql_query("Select * from users"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO users (username, password,done) VALUES ('$username','$password',0)"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered! Please Login with your credentials");</script>'; // Prompts the user
    Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  }
}
?>




