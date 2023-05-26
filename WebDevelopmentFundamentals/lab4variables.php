<?php
	$title = "WEBD2201 - Lab 4: PHP Variable and Value Types";
	$file = "lab4variables.php";
	$description = "Lab 4, textbook example 5.";
	$date = "March 4, 2022";
	$banner = "PHP Variable and Value Types";
	include("./header.php");
?>

<html>
<head>
</head>
<body>
<p>
This page will illustrate the printing of different variables after assigning them.
"Variables begin with a dollar sign ($) and are followed by a meaningful name. 
The variable name cannot begin with a numeric character but can contain numbers and the underscore character (_). 
Additionally, variable names are case-sensitive, meaning that $YOURVAR and $yourvar are two different variables."
</p>
<h4>Textbook Code Examples:</h4>
<!-- Add a PHP block and create a variable that holds an integer: -->
<?php
$intVar = "9554215464";
// Create a variable that holds a floating-point number:
$floatVar = "1542.2232235";
//Create a variable that holds a string:
$stringVar = "This is a string.";
//An echo statement for each variable:
echo "<P>integer: $intVar</P>";
echo "<P>float: $floatVar</P>";
echo "<P>string: $stringVar</P>";
?>

</body>
</html>

<?php
    include ("./footer.php");
?>