<?php
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/webd2201.css" /> 
	<!--
	Author: Eisha Aqeel 
	Filename: <?php echo $file."\n";?>
	Date: <?php echo $date."\n";?>
	Description: <?php echo $description."\n";?>
	-->
	<title><?php echo $title; ?></title> <!-- THE <title> IS FROM A PHP VARIABLE TOO -->
	<?php require("./includes/functions.php"); ?>
</head>
<body>
<div id="container">
	<div id="header">
		<img src="./images/code_bulb.jpg" alt="My logo" height="150"/>
		<h1>
			<?php echo $banner;?>
		</h1>
	</div>
	<div id="sites">
		<ul>
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>		
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>
			<li><a href="http://opentech.durhamcollege.org/pufferd/webd2201/">WEBD2201</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">
			<h3 id="navbar">
				Navigation Bar
			</h3>
			<ul>
				<li><a href="./index.php">Home Page</a></li>
				<li><a href="./lab1.php">XHTML Overview</a></li>
				<li><a href="./lab2.php">HTML Tables</a></li>
				<li><a href="./lab3.php">Formatting with CSS</a></li>
				<li><a href="./test1.php">Term Test 1</a></li>
				<li><a href="./lab4.php">PHP Textbook Examples</a></li>
				<li><a href="./lab5.php">PHP Scripting</a></li>
				<li><a href="./lab6.php">Form with Data Validation (Temperature Conversion Table)</a></li>
				<li><a href="./termtest2.php">Term Test 2 (Currency Converter)</a></li>
				<li><a href="./lab7.php">Using PostgreSQL Database</a></li>
				<li><a href="./lab8.php">Math Quiz Game</a></li>
				<li><a href="./lab9.php">User Login</a></li>
				<li><a href="./lab10.php">User Registration</a></li>
				<li><a href="./termtest3in.php">Term Test 3: termtest3in.php</a></li>
				<li><a href="./termtest3out.php">Term Test 3: termtest3out.php</a></li>
			</ul>
		</div>
		<div id="content">