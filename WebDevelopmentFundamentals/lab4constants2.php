<?php
	$title = "WEBD2201 - Lab 4: Predefined Constants";
	$file = "lab4constants2.php";
	$description = "Lab 4, textbook example 7.";
	$date = "March 4, 2022";
	$banner = "Predefined Constants";
	include("./header.php");
?>

<html>
<body>
<p>This page will illustrate the use of the following Predefined Constants. </br>
1. __FILE__ The name of the script file being parsed.</br>
2. __LINE__ The number of the line in the script being parsed.</br>
3. PHP_VERSION The version of PHP in use.</br>
4. PHP_OS The operating system using PHP.</br>
</p>
<h4>Textbook Code Examples(1 to 4 in order as explained above):</h4>
<?php
//Use the echo statement to display an introductory string, and concatenate the __FILE__ constant to the end of it:
echo "<br>This file is ".__FILE__;
//Use the echo statement to display an introductory string, and concatenate the __LINE__ constant to the end of it:
echo "<br>This is line number ".__LINE__;
//Use the echo statement to display an introductory string, and concatenate the PHP_VERSION constant to the end of it:
echo "<br>The version of PHP that is being used is ".PHP_VERSION;
//Use the echo statement to display an introductory string, and concatenate the PHP_OS constant to the end of it:
echo "<br>This test is being run on ".PHP_OS;
?>
</body>
</html>

<?php
    include ("./footer.php");
?>