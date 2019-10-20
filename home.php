<!DOCTYPE html>
<html>
<head>
	<title>Biscuits R' Us - Home</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- style sheets -->
	<link rel="stylesheet" href="./Navigation/navbar.css" type="text/css"/>

</head>

<body>
	<!-- this php will add the navbar -->
	<?php include("./Navigation/navbar.html"); ?>

	<!-- Page header -->
	<div class="jumbotron text-center">
	  <h1>Biscuits R' Us</h1> 
	  <p>Your One Stop Biscuit Shop!</p> 
	</div>
	

	<!-- Image Carousel -->
	<div class="container">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">

	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	    	<!-- Photo by Cayla1 on Unsplash -->
	      <div class="item active">
	        <img src="/Images/biscuit-tray.jpg" alt="Biscuits on a Tray" style="width:100%;">
	      </div>

	      <!-- Photo by Anastasiia Ostapovych on Unsplash -->
	      <div class="item">
	        <img src="/Images/macrons.jpg" alt="Macrons" style="width:100%;">
	      </div>
	    
	      <!-- Photo by Nerfee Mirandilla on Unsplash -->
	      <div class="item">
	        <img src="/Images/nescafe-cookies.jpg" alt="Cookies and Coffee" style="width:100%;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
	
</body>
</html>