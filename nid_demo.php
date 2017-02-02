<!DOCTYPE html>
<html lang="en">
<head>

  <title>Alcatraz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 


    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
    
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 90%;
      margin: auto;
  }
   
        .carousel-caption{color: black}
  </style>
    
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
      <h2>Attribute selection</h2><br>
    
        
<button data-toggle="collapse" data-target="#demo1" class="btn btn-info">View</button>
<div id="demo1" class="collapse">

    
<div class="container" id="view">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
           <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     

      <div class="item active">
        <img src="images/attributes/duration_vs_srcbytes.PNG"  >
          <div class="carousel-caption">
        <h3>duration vs src_bytes</h3>
        
      </div> 
      </div>
    
      <div class="item">
        <img src="images/attributes/flag_vs_service.PNG"  >
          <div class="carousel-caption">
        <h3>flag vs service</h3>
        
      </div> 
      </div>

      <div class="item">
        <img src="images/attributes/port_vs_host.PNG"  >
          <div class="carousel-caption">
        <h3>port vs host</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/attributes/flag_decision_tree.PNG"  >
          <div class="carousel-caption">
        <h3>flag</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/attributes/flag_pt_loggedin_dt.PNG"  >
          <div class="carousel-caption">
        <h3>flag vs logged_in</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/attributes/serr-vs_srverror.PNG"  >
          <div class="carousel-caption">
        <h3>serr vs srverror</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/attributes/protocol_type_dt.PNG"  >
          <div class="carousel-caption">
        <h3>protocol type dt</h3>
        
      </div> 
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
    
</div> 
        
      
      
      
      
      <br>
    </div>
    
  </div>
            

  <div class="row">
    <div class="col-sm-8">
      <h2>Naive Bayes</h2><br>
      
           
        
<button data-toggle="collapse" data-target="#demo2" class="btn btn-info">View</button>
<div id="demo2" class="collapse">

    
<div class="container" id="view">
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel2" data-slide-to="1"></li>
          <li data-target="#myCarousel2" data-slide-to="2"></li>
          <li data-target="#myCarousel2" data-slide-to="3"></li>
           <li data-target="#myCarousel2" data-slide-to="4"></li>
            <li data-target="#myCarousel2" data-slide-to="5"></li>
            <li data-target="#myCarousel2" data-slide-to="6"></li>
            <li data-target="#myCarousel2" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     

      <div class="item active">
        <img src="images/attributes/duration_vs_srcbytes.PNG"  >
          <div class="carousel-caption">
        <h3>duration vs src_bytes</h3>
        
      </div> 
      </div>
    
      <div class="item">
        <img src="images/attributes/flag_vs_service.PNG"  >
          <div class="carousel-caption">
        <h3>flag vs service</h3>
        
      </div> 
      </div>

      <div class="item">
        <img src="images/attributes/port_vs_host.PNG"  >
          <div class="carousel-caption">
        <h3>port vs host</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/attributes/flag_decision_tree.PNG"  >
          <div class="carousel-caption">
        <h3>flag</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/attributes/flag_pt_loggedin_dt.PNG"  >
          <div class="carousel-caption">
        <h3>flag vs logged_in</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/attributes/serr-vs_srverror.PNG"  >
          <div class="carousel-caption">
        <h3>serr vs srverror</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/attributes/protocol_type_dt.PNG"  >
          <div class="carousel-caption">
        <h3>protocol type dt</h3>
        
      </div> 
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
    
</div> 
        
     
      
      
      
      <br>
    </div>
    
  </div>
    
            
            
            
 <div class="row">
    <div class="col-sm-8">
      <h2>Decision Trees</h2><br>
      
           
        
<button data-toggle="collapse" data-target="#demo3" class="btn btn-info">View</button>
<div id="demo3" class="collapse">

    
<div class="container" id="view">
  <div id="myCarousel3" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel3" data-slide-to="1"></li>
          <li data-target="#myCarousel3" data-slide-to="2"></li>
          <li data-target="#myCarousel3" data-slide-to="3"></li>
           <li data-target="#myCarousel3" data-slide-to="4"></li>
            <li data-target="#myCarousel3" data-slide-to="5"></li>
            <li data-target="#myCarousel3" data-slide-to="6"></li>
            
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     

      <div class="item active">
        <img src="images/decision_trees/dt_with_only_flag.PNG"  >
          <div class="carousel-caption">
        <h3>flag dt</h3>
        
      </div> 
      </div>
    
      <div class="item">
        <img src="images/decision_trees/dt_with_only_protocl_type.PNG"  >
          <div class="carousel-caption">
        <h3>protocol type dt</h3>
        
      </div> 
      </div>

      <div class="item">
        <img src="images/decision_trees/dt_with_only_and_protocol_type.PNG"  >
          <div class="carousel-caption">
        <h3>flag and protocol type</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/decision_trees/dt_with_5.PNG"  >
          <div class="carousel-caption">
        <h3>dt with 5 attributes</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/decision_trees/dt_with_8.PNG"  >
          <div class="carousel-caption">
        <h3>dt with 8 attributes</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/decision_trees/Rplot01.png"  >
          <div class="carousel-caption">
        <h3>Plot using rplot</h3>
        
      </div> 
      </div>
        
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
    
</div> 
        
     
      
      
      
      <br>
    </div>
    
  </div>
            
            
            
  <div class="row">
    <div class="col-sm-8">
      <h2>Decision Trees</h2><br>
      
         
        
<button data-toggle="collapse" data-target="#demo4" class="btn btn-info">View</button>
<div id="demo4" class="collapse">

    
<div class="container" id="view">
  <div id="myCarousel4" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel4" data-slide-to="1"></li>
          <li data-target="#myCarousel4" data-slide-to="2"></li>
          <li data-target="#myCarousel4" data-slide-to="3"></li>
           <li data-target="#myCarousel4" data-slide-to="4"></li>
            <li data-target="#myCarousel4" data-slide-to="5"></li>
            <li data-target="#myCarousel4" data-slide-to="6"></li>
            <li data-target="#myCarousel4" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     

      <div class="item active">
        <img src="images/attributes/duration_vs_srcbytes.PNG"  >
          <div class="carousel-caption">
        <h3>duration vs src_bytes</h3>
        
      </div> 
      </div>
    
      <div class="item">
        <img src="images/attributes/flag_vs_service.PNG"  >
          <div class="carousel-caption">
        <h3>flag vs service</h3>
        
      </div> 
      </div>

      <div class="item">
        <img src="images/attributes/port_vs_host.PNG"  >
          <div class="carousel-caption">
        <h3>port vs host</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/attributes/flag_decision_tree.PNG"  >
          <div class="carousel-caption">
        <h3>flag</h3>
        
      </div> 
      </div>
        
         <div class="item">
        <img src="images/attributes/flag_pt_loggedin_dt.PNG"  >
          <div class="carousel-caption">
        <h3>flag vs logged_in</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/attributes/serr-vs_srverror.PNG"  >
          <div class="carousel-caption">
        <h3>serr vs srverror</h3>
        
      </div> 
      </div>
        
        <div class="item">
        <img src="images/attributes/protocol_type_dt.PNG"  >
          <div class="carousel-caption">
        <h3>protocol type dt</h3>
        
      </div> 
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
    
</div> 
        
     
      
      
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
