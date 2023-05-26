<?php
	$title = "WEBD2201 - Lab 4: Logical Operators";
	$file = "lab4operators4.php";
	$description = "Lab 4, textbook example 11.";
	$date = "March 4, 2022";
	$banner = "Logical Operators";
	include("./header.php");
?>

<html>
<body>
<p>This page will illustrate examples of Logical Operators. Using 2 if...else statements the following example tell you if the
    weather is hot or bearable.
</p>

<h4>Textbook Code Examples:</h4>

<?php
//The comparisons in this script are based on these two variables:
$degrees = "95";
$hot = "yes";
//Within an if…else statement, test whether $degrees is greater than 100 or if the value of $hot is "yes." 
//Depending on the result of the two comparisons, one of the echo statements will print:
if (($degrees > 100) || ($hot == "yes")) {
    echo "<P>TEST 1: It's <strong>really</strong> hot!</P>";
} 
else {
    echo "<P>TEST 1: It's bearable.</P>";
}
//Repeat the same if…else statement as above, but change the operator from the || operator to the && operator:
if (($degrees > 100) && ($hot == "really")) {
    echo "<P>TEST 2: It's <strong>really</strong> hot!</P>";
} 
else {
    echo "<P> TEST 2: It's bearable.</P>";
}
?>
</body>
</html>

<?php
    include ("./footer.php");
?>