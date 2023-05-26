<?php
	$title = "WEBD2201 - Lab 4: Using Constants";
	$file = "lab4constants.php";
	$description = "Lab 4, textbook example 6.";
	$date = "March 4, 2022";
	$banner = "Using Constants";
	include("./header.php");
?>

<html>
<body>
<p>
This page shows the use of constants by defining them. The function used to define a constant is called define(), 
and it requires the name of the constant and the value you want to give it." For this page I defined a constant called MYCONSTANT with a value 
of "This is a test of defining constants.". Unlike simple variables, constants do not have a dollar sign before their names, and they are 
usually uppercase to show their difference.
</p>

<h4>Textbook Code Example:</h4>

<?php
//define a constant called MYCONSTANT with a value of "This is a test of defining constants."
define("MYCONSTANT", "This is a test of defining constants.");
//Print the value of the constant:
echo MYCONSTANT;
?>

</body>
</html>

<?php
    include ("./footer.php");
?>