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
	<link rel="stylesheet" href="./home.css" type="text/css"/>
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
	<div class="container-fluid">
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
	        <div class="carousel-caption">
	          <h3>Ingredients To Go</h3>
	          <p>Make your own delicious treats with our new range</p>
	        </div>
	      </div>

	      <!-- Photo by Anastasiia Ostapovych on Unsplash -->
	      <div class="item">
	        <img src="/Images/macrons.jpg" alt="Macrons" style="width:100%;">
	        <div class="carousel-caption">
	          <h3>Perfection Every Time</h3>
	          <p>Our new Deluxe range offer the ultimate pleasure</p>
	        </div>
	      </div>
	    
	      <!-- Photo by Nerfee Mirandilla on Unsplash -->
	      <div class="item">
	        <img src="/Images/nescafe-cookies.jpg" alt="Cookies and Coffee" style="width:100%;">
	        <div class="carousel-caption">
	          <h3>Time To Relax</h3>
	          <p>Put on the kettle and relax, after a long day</p>
	        </div>
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
	</div> <!-- End of the carousel -->



	<!-- Container (About Section) -->
	<div id="products" class="container-fluid home-cons">
	  <div class="row">
	    <div class="col-sm-8">
	      <h2>Products</h2><br>
	      
	      <h4>We offer only the best when it comes to biscuits. Explore our diverse range today and caught some the latest offers.</h4><br>
	      
	      <p>From old classics to new stars, if you can think of it, then we sell it. Our range extends from main stream biscuits of all kinds, to our own fresh inhouse offerings. Not content with just that though? Well, you can also order all the ingredients you'd ever need, to make your own delicious treats today!</p><br>

	      <button class="btn btn-default btn-lg" onclick="location.href='/Products/products.php'">View Products</button>
	    </div>

	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-cutlery logo"></span>
	    </div>
	  </div>
	</div>



	<!-- Container (About Section) -->
	<div id="our-promise" class="container-fluid home-cons">
	  <div class="row">
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-check logo"></span>
	    </div>

	    <div class="col-sm-8">
	      <h2>Our Promise</h2><br>
	      
	      <h4>At Biscuits R' Us, it is our belief that all our customers are master bakers.. So thats why we treat you like one!</h4><br>
	      
	      <p>We only sell the freshest, hand picked ingredients. All our biscuits are made in Ireland to the highest quality standards. Not satisfied? We guarantee free returns and money back on all purchases that don't live up this standard.</p>

	    </div>
	  </div>
	</div>

	
</body>
</html>