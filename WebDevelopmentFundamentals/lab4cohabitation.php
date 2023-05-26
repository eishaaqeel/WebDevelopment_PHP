<?php
	$title = "WEBD2201 - Lab 4: Code Cohabitation";
	$file = "lab4cohabitation.php";
	$description = "Lab 4, textbook example 2.";
	$date = "March 4, 2022";
	$banner = "Code Cohabitation";
	include("./header.php");
?>

<html>
<body>
<p>
This page will illustrate that PHP and HTML can coexist. I have created a script that has PHP code in the middle of my HTML on this page.
</p>
<h4>Textbook Code Example:</h4>
<?php
	echo "<P><em>Hello World! I'm using PHP!</em></P>";
?>

</body>
</html>

<?php
    include ("./footer.php");
?>