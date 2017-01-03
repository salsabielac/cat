<!DOCTYPE html>
<html lang="en">
<head>
  <title>Grooming_Go</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Grooming_Go</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Customer</a></li>
        <li><a href="#">Transaction</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://fitzroyvet.com.au/sites/default/files/styles/large/public/images/article/cats.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
      <div class="item">
        <img src="https://i.ytimg.com/vi/_CRE-XdVvNA/maxresdefault.jpg" alt="Image">
        <div class="carousel-caption">
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
  
<div class="container text-center">    
  <h3>Paket Grooming</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://www.petfinder.com/wp-content/uploads/2012/11/95489063-cat-deshedding-tools-632x475.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Grooming Large</p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://images.wisegeek.com/cat-nails.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Grooming Medium</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="http://jmpetresort.com/wp-content/uploads/2016/02/shutterstock_164742152-300x300.jpg" alt="Image">
      <p>Grooming Reguler</p>    
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>© Grooming Go - 2016.</p>
</footer>

</body>
</html>
