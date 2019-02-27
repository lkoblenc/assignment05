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

<div class="readmore zpad">Read More &dArr;</div>

<section class="tom">

	<h2>Tom</h2>

	<p>Hi, my name is Thomas Hogrefe. I’m a senior at the University of Rochester studying Political Science with a minor in Computer Science. Outside of class, I’m a member of Sigma Phi Epsilon and a Speaking Fellow. I enjoy aviation and programming in my spare time.</p>

</section>

<section class="michael">

	<h2>Michael</h2>

	<p>I’m a senior full time student from a small town called Greene, NY, about 3 hours south from here (near Binghamton). Binghamton is a rust-belt relic that has suffered from declining population and a poor economy over the past few decades, but recently has seen a revival thanks to business incentive programs and the growth of Binghamton University. Greene is about 20 miles north of Binghamton and has a population of ~5,000. Greene is nicer than many similar rural villages located nearby thanks to the presence of the Raymond Corporation, which employs more than ~1,000 people. Raymond, a subsidiary of Toyota that leads the forklift industry, has been headquartered in Greene since its formation in 1840. Greene’s school system usually yields 70-90 students per grade (my class had 76), has pretty decent average test scores for a small school but doesn’t offer AP courses – which can make applying for colleges difficult. Luckily, I ended up getting into U of R and will be graduating in May.</p>

</section>

<section class="chadia">

	<h2>Chadia</h2>

	<p>I am a senior at the University of Rochester majoring in Financial Economics with a minor in Business. Before transferring to the U of R a couple years ago, I was living in Austin, Texas. Most recently, I was working as a Fundraising coordinator for a local non-profit called Humans for Education that helps schools in Kenya become financially independent and in turn make sure every child has access to quality education. Now, I have been working as a Workshop Leader for Calculus III and Python. It has been a very rewarding experience because I realized that no matter how much you know about a subject, there is always room to learn more.</p>

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
