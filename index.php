<?php defined('_JEXEC') or die; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css" rel="stylesheet" />
<title>ShowLand</title>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="templates/template-levus/5star.css">
<link rel="stylesheet" type="text/css" href="templates/template-levus/style.css">
<script type="text/javascript" src="templates/template-levus/angular.min.js"></script>
<script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>
</head>

<body ng-app="myApp">

 <div class="main">
   	<div class="jumbotron">
   		<div class="left">
			<a href="/">
				<img src="../templates/template-levus/logo.png" alt="">
			</a>
			<div class="mid">
				<h1>ShowLand</h1>      
				<p>All your shows in one place.</p>
			</div>
	  	</div>
	  	<div class="right">
			<form action="" method="get">
				<input name="wyszukaj" placeholder="Wyszukaj film..." type="text">
				<button type="submit" name="search">wyślij</button>
			</form>
		</div>
	</div>
    <div class="bgd">
		<div class="container">
		  <div class="ng-view"></div>
		</div>		
	</div> 	
 </div>
 <div class="footer">
	<span>Copyright © 2017 ShowLand. All rights reserved.</span>
	<span style="float:right"> Web developer / Paweł Jędrasik</span>
</div>

    <!-- Modules -->
    <script src="../templates/template-levus/myApp.js"></script>

    <!-- Controllers -->
    <script src="../templates/template-levus/controllers/MainController.js"></script>
	<script src="../templates/template-levus/controllers/MovieController.js"></script>
   
    <!-- Services -->
    <script src="../templates/template-levus/services/movies.js"></script>
  </body>
</html>
