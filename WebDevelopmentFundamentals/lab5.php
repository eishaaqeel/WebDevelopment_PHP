<?php
	$title = "WEBD2201 - Lab 5";
	$file = "lab5.php";
	$description = "Lab 5 page for my WEBD2201 Website. This lab is about PHP Scripting.";
	$date = "March 11, 2022";
	$banner = "Lab 5 - PHP Scripting";
	include("./header.php");
?>

<p class="double">
    This lab is about PHP scripting. Below is the link to a form that can do four types of calculations to user inputs.
    I learned how to use HTML forms to send variables to my scripts, 
    how to use environment variables, and how to write functions.
</p>    
<p>
    <a href="./lab5calculate_form.php">Calculation Form</a></br></br>
</p>

<?php
    include ("./footer.php");
?>