<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>Assignment 05 | Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Chonburi|Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spectral:300,400,800" rel="stylesheet">
	<link rel="stylesheet" href="sss/sss.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body class="home">

<header class="banner">
	<h1>Story of Three UR Seniors</h1>
	<div class="sub-text">Two CS Minor and One Business Minor</div>
	
    <?php include "inc/nav.inc"; ?>

</header>

<div class="container1">

<a href="#tom" class="readmore zpad" id="tom">Read More &dArr;</a>

<section class="tom">

	<h2>Tom</h2>

	<p>Hi, my name is Thomas Hogrefe. I’m a senior at the University of Rochester studying Political Science with a <u>minor in Computer Science</u>. </p>

</section>

<section class="michael">

	<h2>Michael</h2>

	<p>I’m a senior full time student from a small town called Greene. My major is Environmental Science with a <u>minor in Comuper Science</u>. </p>

</section>

<section class="chadia">

	<h2>Chadia</h2>

	<p>I transferred to UR couple of years ago, and I am now a senior majoring in Financial Economics with a <i><u>minor in Business</i></u>.</p>

</section>

<aside class="pad containerz">

	<div class="slider">
		<img src="images/seniors.jpeg" alt="URseniors">
		
		<img src="images/rr.jpeg" alt="UR">
		
	
		<img src="images/lib.jpeg" alt="URlib">

    </div>

</aside>

	<footer class="foot">
		Website Created by Team Atlantis | CSC 174 Assignment
	</footer>
<!-- <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->

</div>

<?php include "inc/scripts.inc"; ?>


<script src="sss/sss.js"></script>

<script> 
$('.slider').sss(); 
</script>
</body>

</html>
