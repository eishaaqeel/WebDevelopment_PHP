<?php
	$title = "WEBD2201 - Lab 6";
	$file = "lab6.php";
	$description = "Lab 6 page for my WEBD2201 Website. This lab is about validating data from self-referring forms.";
	$date = "March 18, 2022";
	$banner = "Lab 6 - Self-referring Forms with Data Validation";
	include("./header.php");

//Define a constant named MAX_ITERATIONS that contains a value of 100:
define("MAX_ITERATIONS", 100);
//empty out error and output regardless of the method:
$error = "";
$output = "";
//first time the page loads in the default GET mode, so below are empty string variable:
if($_SERVER["REQUEST_METHOD"] == "GET"){
	$start = ""; 
	$stop = "";
	$incr = "";
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){
	//try processing what was submitted to the form:
	$start = trim($_POST["starting_temperature"]);
	$stop = trim($_POST["stop_temperature"]);
	$incr = trim($_POST["temperature_increment"]);

	//validation
	//if $start does not have anything in it, display this message
	if(!isset($start) || $start == ""){
		$error .= "You must enter a start temperature.";
	}
	//if the input for $start is not numeric, display this message
	else if(!is_numeric($start)){
		$error .= "The start temperature must be a number. You entered: " .$start;
		//empty out the invalid data
		$start = "";
	}
	//if the start temperature is greater than the end temperature, display this message
	else if($start > $stop){
		$error .= "The start temperature can not be greater than the end temperature. Try agian.";
		//empty out the invalid data
		$start = "";
	}

	//if $stop does not have anything in it, display this message
	if(!isset($stop) || $stop == ""){
		$error .= "<br>You must enter a stop temperature.";
	}
	//if the input for $stop is not numeric, display this message
	else if(!is_numeric($stop)){
		$error .= "<br>The stop temperature must be a number. You entered: " .$stop;
		//empty out the invalid data
		$stop = "";
	}

	//if $incr does not have anything in it, display this message
	if(!isset($incr) || $incr == ""){
		$error .= "<br>You must enter an increment.";
	}
	//if the input for $incr is not numeric, display this message
	else if(!is_numeric($incr)){
		$error .= "<br>The temperature increment must be a number. You entered: " .$incr;
		//empty out the invalid data
		$incr = "";
	}
	//if the temperature increment is a zero or negitive, display this message
	else if($incr<=0){
		$error .= "<br>The temperature increment must be a positve number. You entered: " .$incr;
		//empty out the invalid data
		$incr = "";
	}
	//if there are no errors, and there are no more than MAX_ITERATIONS number of loops based on the conditions set by the user, then calculate
	if(($error == "") && (($stop - $start)/$incr<=MAX_ITERATIONS)){
		//created a function called convert which takes in $start,$stop, and $incr. Then it creates a dynamic table
		function convert($start,$stop,$incr) {
			$table="";
			$table.="<table>";
			$table.="<tr><th>Celsius</th><th>Fahrenheit</th></tr>";
			//for loop to calculate with conditions and add to table
			for($i=$start;$i<=$stop;$i=$i+$incr){
				$f = 9.0/5.0*$i + 32;
				$table.="<tr><td>$i&deg;</td><td>$f&deg;</td></tr>";
			}
			$table.="</table>";
			return  $table;
			}
		//call the function:
		$output = convert($start,$stop,$incr);
	}
}
?>

<p class="double">
    In this lab, I will convert Celsius to Fahrenheit and output the result(s) in a table. If any field is empty, or the user enters something other than a number, 
	or any invalid input, then specific error messages will be displayed telling the user their mistake.
</p>
<!--Show any error(s) at the top after description paragraph-->
<h2><?php echo $error; ?></h3>
<!--Self-submitting form-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	<b>Starting Temperature:</b>
	<input type="text" name="starting_temperature" value="<?php echo $start ?>"><br/><br/>
	<b>Stop Temperature:</b>
	<input type="text" name="stop_temperature" value="<?php echo $stop ?>"><br/><br/>
	<b>Temperature Increment:</b>
	<input type="text" name="temperature_increment" value="<?php echo $incr ?>"><br/><br/>
	<!--Submit button:-->
	<input type="submit" value="Create Temperature Conversion Table"/>
</form>
<!--Show the result (the table) at the bottom of the page-->
<p><?php echo $output; ?></p>
<style>
table, td, th {
border: 1px solid black;
}
</style>

<?php
    include ("./footer.php");
?>