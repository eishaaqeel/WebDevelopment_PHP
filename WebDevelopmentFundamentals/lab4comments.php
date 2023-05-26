<?php
	$title = "WEBD2201 - Lab 4: Commenting Your Code";
	$file = "lab4comments.php";
	$description = "Lab 4, textbook example 4.";
	$date = "March 4, 2022";
	$banner = "Commenting Your Code";
	include("./header.php");
?>

<html>
<body>
<p>
This page is all about commenting code. "Entering comments in HTML documents helps you 
(and others who might have to edit your document later) keep track of what's going on in large documents. 
Comments also allow you to write notes to yourself during the development process, 
or to comment out parts of code when you are testing your scripts, so the code is not executed."
</p>

<!-- This is an HTML comment. -->
<?php
// This is a simple PHP comment.
/* This is a C-style, multiline comment. You can make this as
long as you'd like. */
# Used to shells? Use this kind of comment.
?>

</body>
</html>

<?php
    include ("./footer.php");
?>