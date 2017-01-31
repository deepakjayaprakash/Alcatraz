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
          <li><a href="nid_index.html">Home</a></li>
          <li><a href="#about">Pre-processing</a></li>
          <li><a href="#model">Analysis</a></li>
          <li><a href="#visual">Visualization</a></li>
          <li><a href="#conclusion">Conclusion</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Network Intrusion Detection </h1> 
   
</div>

    
    
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Pre-processing and Attribute selection</h2><br>
      <h4>The only preprocessing step was to label the attacks into 4 main classes and also to normalize some of the attributes to the range of 0-1. The attribute selection is the tricky part. <br><br>Typical models like random forests, decision trees, etc take very long time to build the model. Hence, the number of attributes must be reduced. Moreover, there are many zero variance features which are removed in this step.
      
      <br>
    </div>
    
  </div>
    </div> 
    
    
    <div id="model" class="container" >
        <div id="about" class="container-fluid">

       <div class="row">
    <div class="col-sm-8">
      <h2>Building the classifier and testing the results</h2><br>
      <h4>Three algorithms were used to build the classifier models and each different combinations of number of attributes and the size of training set was used to analyze and compare the efficiencies.  The following are the models built and a brief description <br><br>
      
      <ul>
          <li><b> Naïve Bayes </b>: This model is based on conditional probability calculations and hence is a mathematical model. The maximum efficiency was obtained when 23 attributes and 125974 training and 25974 testing was used.<br> The model gave an average of 78%accuracy for full length of data set.</li>
          <br>
          
          <li> <b>Random Forest: </b>: Random Forests are a group of decision trees built by taking a particular subset of attributes or tuples as input for each tree. Then it uses a bagging and bootstrapping algorithm to ensemble the results obtained. The maximum efficiency was obtained when 23 attributes and 125974 training and 25974 testing was used.   </li>
        <br>
          
          <li><b>Decision Tree : </b>: It evaluates feature subsets using best-first search and can use cross-validation for evaluation. The order of attributes and the weight are decided by the algorithm itself. The maximum efficiency was obtained when 8 attributes and 100000 training and 25974 testing was used.</li>
          </ul>
      
      <br>
    </div>
    
  </div>
</div>     
        </div>  
        
        
        
        
   
    <div id="visual" class="container" >
        <div id="about" class="container-fluid">
        

  <div class="row">
    <div class="col-sm-8">
        <h1>Visualization</h1>
      <h2>Naive Bayes</h2><br>
      
      
      
      
      <br>
    </div>
    
  </div>
            

  <div class="row">
    <div class="col-sm-8">
      <h2>Random Forests</h2><br>
      
      
      
      
      <br>
    </div>
    
  </div>
            
  <div class="row">
    <div class="col-sm-8">
      <h2>Decision Trees</h2><br>
      
      
      
      
      <br>
    </div>
    
  </div>            
            
</div>     
        </div>
        
        
   <div id="conclusion" class="container" >
        <div id="about" class="container-fluid">

       <div class="row">
    <div class="col-sm-8">
      <h2> Conclusions and future work </h2><br>
      <h4>The pre-processing, construction of classifiers comparison, analysis  gave us some insights. Some of them are listed below<br><br>
      
      <ul>
          <li>The redundancy can be eliminated by finding out the zero-variance features and not including them in the training set as it leads to biased results. </li>
          <br>
          
          <li> Once threshold efficiency is reached, any increase in the training set would only over-fit the data. Therefore the results would tend to deteriorate if training set is kept increasing. </li>
        <br>
          
          <li>Instead the number of attributes taken to build the model can be increased to improve the results </li>
          
          <li> Once trained, the model was also tested to find out how it would respond to attacks which are new. The models performed pretty well for even these un-trained new attack types. </li>
          </ul>
      
      <br>
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
