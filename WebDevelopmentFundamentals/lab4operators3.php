<?php
	$title = "WEBD2201 - Lab 4: Comparison Operators";
	$file = "lab4operators3.php";
	$description = "Lab 4, textbook example 10.";
	$date = "March 4, 2022";
	$banner = "Comparison Operators";
	include("./header.php");
?>

<html>
<body>
<p>This page will illustrate examples of Comparison Operators.
</p>

<table border="1" width="90%" style="margin-left:auto; margin-right:auto;">
<caption>Comparison Operators</caption>
<!--The first row with the words bolded and centerd-->
<tr>
    <th width="20%">Operator</th>
    <th width="80%">Definition</th>
</tr>
<!--Row2-->
<tr>
<td>==</td>
<td>Equal to</td>
</tr>
<!--Row3-->
<tr>
<td>!=</td>
<td>Not equal to</td>
</tr>
<!--Row4-->
<tr>
<td>&gt;</td>
<td>Greater than</td>
</tr>
<!--Row5-->
<tr>
<td>&lt;</td>
<td>Less than</td>
</tr>
<!--Row6-->
<tr>
<td>&gt;=</td>
<td>Greater than or equal to</td>
</tr>
<!--Row7-->
<tr>
<td>&lt;=</td>
<td>Less than or equal to</td>
</tr>
</table></br>

<h4>Textbook Code Examples:</h4>

<?php
//create two variables with values, and print the values:
$a = 21;
$b = 15;
echo "<P>Original value of \$a is $a and \$b is $b</P>";
//Within an if…else statement, test whether $a is equal to $b. 
//Depending on the answer (true or false), one of the echo statements will print:
if ($a == $b) {
    echo "<P>TEST 1 (==): \$a equals \$b</P>";
} 
else {
    echo "<P>TEST 1(==): \$a is not equal to \$b</P>";
}
//Within an if…else statement, test whether $a is not equal to $b:
if ($a != $b) {
    echo "<P>TEST 2(!=): \$a is not equal to \$b</P>";
} 
else {
    echo "<P>TEST 2(!=): \$a is equal to \$b</P>";
}
// test whether $a is greater than $b
if ($a > $b) {
    echo "<P>TEST 3: \$a is greater than \$b</P>";
} 
else {
    echo "<P>TEST 3: \$a is not greater than \$b</P>";
}
//test whether $a is less than $b
if ($a < $b) {
    echo "<P>TEST 4: \$a is less than \$b</P>";
} 
else {
    echo "<P>TEST 4: \$a is not less than \$b</P>";
}
// test whether $a is greater than or equal to $b
if ($a >= $b) {
    echo "<P>TEST 5: \$a is greater than or equal to \$b</P>";
} 
else {
    echo "<P>TEST 5: \$a is not greater than or equal to \$b</P>";
}
// test whether $a is less than or equal to $b
if ($a <= $b) {
    echo "<P>TEST 6: \$a is less than or equal to \$b</P>";
} 
else {
    echo "<P>TEST 6: \$a is not less than or equal to \$b</P>";
}
?>
</body>
</html>

<?php
    include ("./footer.php");
?>