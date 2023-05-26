<?php
	$title = "WEBD2201 - Lab 5: Calculation Form";
	$file = "lab5calculate_form.php";
	$description = "Lab 5, Calculation Form.";
	$date = "March 11, 2022";
	$banner = "Calculation Form";
	include("./header.php");
?>

<html>
<body>
<p>
This page allows the user to enter two values and choose what type of calculation to do. 
It will redirect you to a different page to show the result.
</p>
<!--The method is POST and the action is a script called lab5calculate.php:-->
<form method="post" action="lab5calculate.php">
<!--An input field for the first value, with a text label:-->
<p>Value 1: <input type="text" name="val1" size=10></p>
<!--An input field for the second value, with a text label:-->
<p>Value 2: <input type="text" name="val2" size=10></p>
<!--radio buttons-->
<p>Calculation Type:<br>
<input type="radio" name="calc" value="add"> add<br>
<input type="radio" name="calc" value="subtract"> subtract<br>
<input type="radio" name="calc" value="multiply"> multiply<br>
<input type="radio" name="calc" value="divide"> divide</p>
<!--submit button-->
<p><input type="submit" name="submit" value="Calculate"></p>
</form>
</body>
</html>

<?php
    include ("./footer.php");
?>