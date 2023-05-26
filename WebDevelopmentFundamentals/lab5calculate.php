<?php
	$title = "WEBD2201 - Lab 5: Calculation Script";
	$file = "lab5calculate.php";
	$description = "Lab 5, Calculation Script.";
	$date = "March 11, 2022";
	$banner = "Calculation Script";
	include("./header.php");
?>
<?php
    //an if statement that checks for the presence of the three values:
    if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) {
        //A header statement to send the browser back to the calculation form:
        header("Location: lab5calculate_form.php");
        //If any of the three required variables do not have a value, exit script:
        exit;
    }

    //if...else statement for the 4 calculation types:
    if ($_POST['calc'] == "add") {
        $result = $_POST['val1'] + $_POST['val2'];
    } 
    else if ($_POST['calc'] == "subtract") {
        $result = $_POST['val1'] - $_POST['val2'];
    } 
    else if ($_POST['calc'] == "multiply") {
        $result = $_POST['val1'] * $_POST['val2'];
    } 
    else if ($_POST['calc'] == "divide") {
        $result = $_POST['val1'] / $_POST['val2'];
    }
?>

<html>
<body>
<!--display the value of $result:-->
<p>The result of the calculation is: <?php echo "$result"; ?></p>
</body>
</html>

<?php
    include ("./footer.php");
?>