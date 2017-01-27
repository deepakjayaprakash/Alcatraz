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
 
</head>
 
    
    <?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	if(isset($_SESSION['str'])&& isset($_SESSION['strn'])&& isset($_SESSION['strm'])){
	$res=$_SESSION['str'];
	$resn=$_SESSION['strn'];
	$resm=$_SESSION['strm'];
	}
	?>

    
    
    

    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="keystroke_demo.html">HOME</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
        
      </ul>
    </div>
  </div>
</nav>






<div class="container">
 
 <div class="row">
  <div class="col-sm-2">
  
 
<br><br>
  <ul class="nav nav-pills nav-stacked">
    <li class="active">
    <li><a data-toggle="pill" href="#keys">Enter keystroke</a></li>
    <li><a data-toggle="pill" href="#man">Manhattan</a></li>
    <li><a data-toggle="pill" href="#euc">Eucledian </a></li>
    <li><a data-toggle="pill" href="#med">manhattan Median </a></li>
    <li><a data-toggle="pill" href="#ens">Ensemble Result </a></li>
  </ul>
  </div>

  <div class="col-sm-10">
  <div class="tab-content">
    <br><br><br><br><br><br>
    <div id="keys" class="tab-pane fade">
      <h3>Enter Keystroke</h3>
      <p><a href="create_account.php">Go to create logistics page</a></p>
    </div>
    <div id="euc" class="tab-pane fade ">
      <h3>Euclidian</h3>
      <?php Print "$res"; ?>
      
    </div>
    <div id="man" class="tab-pane fade">
      <h3>Manhattan model</h3>
       <?php Print "$resn" ?>
    </div>
    <div id="med" class="tab-pane fade">
      <h3>Manhattan model using median </h3>
      <?php Print "$resm" ?>
    </div>
    <div id="ens" class="tab-pane fade in active">
      <h3>Ensemble Result </h3>
      <?php 
      $count=0;
      if(isset($_SESSION['str'])){
      if(strpos($res, "yes")!==false)
      $count=$count+1;
 	 if(strpos($resn, "yes")!==false)
      $count=$count+1;
  	if(strpos($resm, "yes")!==false)
      $count=$count+1;

  	Print "The input has passed ".$count." out of three predictive algorithms";
  	if(strpos($res, "yes")!==false ||( strpos($resn, "yes")!==false &&strpos($resm, "yes")!==false)) 
  		Print "<br>It has passed the ensemble criteria!!Yippe!!";
  		else
  			Print "<br>It has failed the ensemble criteria! Sorry";
  	}
  	else{
  		Print "Enter your keystroke";
  	}
       ?>
  	
    </div>
  </div>
  </div>

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








