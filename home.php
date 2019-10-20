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
	
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Biscuits R' Us</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Products</a></li>
	      <li><a href="#">About Us</a></li>
	    </ul>
	    <form class="navbar-form navbar-left" action="/action_page.php">
	      <div class="input-group">
	        <input type="text" class="form-control" placeholder="Search Products..." name="search">
	        <div class="input-group-btn">
	          <button class="btn btn-default" type="submit">
	            <i class="glyphicon glyphicon-search"></i>
	          </button>
	        </div>
	      </div>
	    </form>
	  </div>
	</nav>
	
</body>
</html>