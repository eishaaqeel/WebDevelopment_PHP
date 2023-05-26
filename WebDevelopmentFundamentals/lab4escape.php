<?php
	$title = "WEBD2201 - Lab 4: Escaping Your Code";
	$file = "lab4escape.php";
	$description = "Lab 4, textbook example 3.";
	$date = "March 4, 2022";
	$banner = "Escaping Your Code";
	include("./header.php");
?>

<!--Start of page content-->
<html>
<body>
<p>This page shows that when using quotation marks inside other quotation marks, 
    the inner quotation marks must have the escape (\) character before each ("). The escape character is also known as a backslash.</p>
<h4>Textbook Code Example:</h4>
<?php
	echo "<P>I think this is really \"cool\"!</P>";
?>

</body>
</html>
<!--End of page content-->
<?php
    include ("./footer.php");
?>