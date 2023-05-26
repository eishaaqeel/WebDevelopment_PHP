<?php
	$title = "WEBD2201 - Lab 4: Arithmetic Operators";
	$file = "lab4operators2.php";
	$description = "Lab 4, textbook example 9.";
	$date = "March 4, 2022";
	$banner = "Arithmetic Operators";
	include("./header.php");
?>

<html>
<body>
<p>This page will illustrate examples of Arithmetic Operators, such as adding, subtracting, multiplying, dividing, 
    and checking the modulus of two numbers.
</p>
<h4>Textbook Code Examples:</h4>
<?php
//create two variables with values, and print the values:
$a = 85;
$b = 24;
echo "<P>Original value of \$a is $a and \$b is $b</P>";
//Add the two values and print the result:
$c = $a + $b;
echo "<P>Added \$a and \$b and got $c</P>";
//Subtract the two values and print the result:
$c = $a - $b;
echo "<P>Subtracted \$b from \$a and got $c</P>";
//Multiply the two values and print the result:
$c = $a * $b;
echo "<P>Multiplied \$a and \$b and got $c</P>";
//Divide the two values and print the result:
$c = $a / $b;
echo "<P>Divided \$a by \$b and got $c</P>";
//Check the modulus of the two values and print the result:
$c = $a % $b;
echo "<P>The modulus of \$a and \$b is $c</P>";
?>
</body>
</html>

<?php
    include ("./footer.php");
?>