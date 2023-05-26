<?php
    $title = "Test 2";
    $file = "termtest2.php";
    $description = "This is my Term test 2 for WEBD2201.";
    $date = "March 30, 2022";
    $banner = "WEBD2201 - Term Test 2";
    include ("./header.php");

    // 1 Canadian Dollar equals 0.60 Pounds
    define("CAD_TO_POUND", 0.60);
    // 1 Canadian Dollar equals 0.69 Euros
    define("CAD_TO_EURO", 0.69);

    // Initialize variables
    $output = "";
    $error = "";

    // if the form was submitted via GET method (1st time the page loads in the default GET mode), clear inputs
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $money_input = "";
        $country_input = "";
    }
    // else if the form was submitted via POST method,
    elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form inputs
        $money_input = trim($_POST["money_input"]);
        $country_input = trim($_POST["country_input"]);

        // making sure the money_input is not empty
        if (!isset($money_input) || $money_input == "") {
            $error .= "The Amount of Money field can't be empty.";
        }
        // making sure the money input is numeric
        else if (!is_numeric($money_input)) {
            $error .= "The Amount of Money field MUST be a Number, You Entered: " . $money_input;
            $money_input = "";
        }
        // making sure the money input is greater then 0
        else if ($money_input < 0) {
            $error .= "The Amount of Money field MUST be a Positive Number, You Entered: " . $money_input;
            $money_input = "";
        }

        // making sure the country_input is not empty
        if (!isset($country_input) || $country_input == "") {
            $error .= "<br>The Country field can't be empty.";
        }
        // making sure the country_input is only England and Europe
        else if ($country_input !== "England" && $country_input !== "Europe") {
            $error .= "<br>The Country field MUST be England or Europe (Case sensitive), You entered: " . $country_input;
            $country_input = "";
        }

        // if there are no errors and the user input England,
        if ($error == "" && $country_input == "England") {
            // convert the input to Pounds
            $output = $money_input * CAD_TO_POUND;
            $output .= " Pounds";
        }
        // else if there are no errors and the user input Europe,
        else if ($error == "" && $country_input == "Europe") {
            $output = $money_input * CAD_TO_EURO;
            // convert the input to Euros
            $output .= " Euros";
        }
    }
?>

<h3>Currency Converter:</h3>
<!--Show any error(s) at the top after title-->
<h2><?php echo $error; ?></h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table id="form-table">
        <tr>
            <td>Amount of Money in Canadian Dollars:</td>
            <td><input type="text" class="text-field" name="money_input" value="<?php echo $money_input; ?>"/></td>
        </tr>
        <tr>
            <td>Country (England or Europe):</td>
            <td><input type="text" class="text-field" name="country_input" value="<?php echo $country_input; ?>"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Convert Currency" class="button"/></td>
        </tr>
    </table>
</form>
<!--Show the result at the bottom of the page-->
<p><?php echo $output; ?></p>

<?php
    include ("./footer.php");
?>
