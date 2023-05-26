<?php
	$title = "WEBD2201 - Lab 4";
	$file = "lab4.php";
	$description = "Lab 4 page for my WEBD2201 Website. This lab is an introduction to php (Hypertext Preprocessor).
     There are 11 textbook examples to follow, each has it's own link.";
	$date = "March 4, 2022";
	$banner = "Lab 4 - PHP Textbook Examples";
	include("./header.php");
?>

<p class="double">
    This lab is an introduction to PHP (Hypertext Preprocessor). Below are the links to eleven 
    examples I followed from chapters four and five of our textbook (PHP 5 Fast &amp; Easy Web Development).
</p>    
<p>
    <a href="./lab4tags.php">PHP Start and End Tags</a></br></br>
    <a href="./lab4cohabitation.php">Code Cohabitation</a></br></br>
    <a href="./lab4escape.php">Escaping Your Code</a></br></br>
    <a href="./lab4comments.php">Commenting Your Code</a></br></br>
    <a href="./lab4variables.php">PHP Variable and Value Types</a></br></br>
    <a href="./lab4constants.php">Using Constants</a></br></br>
    <a href="./lab4constants2.php">Predefined Constants</a></br></br>
    <a href="./lab4operators1.php">Assignment Operators</a></br></br>
    <a href="./lab4operators2.php">Arithmetic Operators</a></br></br>
    <a href="./lab4operators3.php">Comparison Operators</a></br></br>
    <a href="./lab4operators4.php">Logical Operators</a></br>
</p>

<?php
    include ("./footer.php");
?>