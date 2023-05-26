<?php
	$title = "WEBD2201 - Lab 4: Assignment Operators";
	$file = "lab4operators1.php";
	$description = "Lab 4, textbook example 8.";
	$date = "March 4, 2022";
	$banner = "Assignment Operators";
	include("./header.php");
?>

<html>
<body>
<p>This page has code that will assign an original value to one variable and then change 
that value as the script executes, all while printing the result to the screen. The table below explains it.
</p>

<table border="1" width="90%" style="margin-left:auto; margin-right:auto;">
	<caption>Assignment Operators</caption>
	<!--The first row with the words bolded and centerd-->
	<tr>
		<th width="10%">Operator</th>
		<th width="20%">Example</th>
		<th width="70%">Action</th>
	</tr>
	<!--Row2-->
	<tr>
	<td>+=</td>
	<td>$a += 3;</td>
	<td>Changes the value of a variable to the current value plus the value on the right side.</td>
	</tr>
	<!--Row3-->
	<tr>
	<td>-=</td>
	<td>$a -= 3;</td>
	<td>Changes the value of a variable to the current value minus the value on the right side.</td>
	</tr>
	<!--Row4-->
	<tr>
	<td>.=</td>
	<td>$a .= "string";</td>
	<td>Concatenates (adds on to) the value on the right side with the current value.</td>
	</tr>
</table></br>

<h4>Textbook Code Examples:</h4>
<?php
//Create a variable with a value of 100 and then print it:
$origVar = 100;
echo "<P>Original value is $origVar</P>";
//Add to that value and then print it:
$origVar += 25;
echo "<P>Added 25, now it's $origVar</P>";
//Subtract from that value and then print it:
$origVar -= 12;
echo "<P>Subtracted 12 so now it's $origVar</P>";
//Concatenate a string and then print it:
$origVar .= " chickens";
echo "<P>Concatenate a string and then print it: $origVar</P>";
?>
</body>
</html>

<?php
    include ("./footer.php");
?>