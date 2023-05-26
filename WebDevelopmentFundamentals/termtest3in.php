<?php
    $title = "termtest3in";
    $file = "termtest3in.php";
    $description = "This is the one out of two pages for my WEBD2201 Term Test 3. This page contains a form to add contacts by fill the following fields.";
    $date = "April 20, 2022";
    $banner = "Term Test 3 - Add Contact (termtest3in.php)";
    include ("./header.php");

//define new constant
define('PHONE_LENGTH', 10);

$errors="";
if($_SERVER["REQUEST_METHOD"] == "GET"){
	$email = "";
    $fname = ""; 
	$lname = "";
	$phone = "";
}
elseif($_SERVER['REQUEST_METHOD']=="POST"){
    $email = trim($_POST['input_email']);
    $fname = trim($_POST['input_fname']);
    $lname = trim($_POST['input_lname']);
    $phone = trim($_POST['input_phone']);
    $conn = db_connect();

    //validation for email
    if(strlen($email) == 0){
        //use strlen() to det. whether the var empty or not
        $errors .= "You did not enter an email address<br/>";
    }
    else if(strlen($email) > MAXIMUM_EMAIL_LENGTH){
        $errors .= "Your email needs to be less than " .MAX_EMAIL_LENGTH. " characters, ". $email ." is too long<br/>";
        //empty out the invalid data
        $email = "";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //note the ! not symbol, if valid no problem
        $errors .= "<em>". $email . "</em> is not a valid email address<br/>";
        //NOTE: give the invalid address so user knows what they entered
        $email = ""; //empty out the variable so it is not sticky
    }
    //also, the email entered should NOT already exist in your database.
    else{
        $sql = "SELECT * FROM contacts WHERE email_address = '$email'";
        $results = pg_query($conn, $sql);

        if(pg_num_rows($results)){
            $errors .= "The email <em>". $email ."</em> already exists in our system. Please try another.<br/>";
            //empty out the invalid data
            $email = "";
        }
    }

    //the submitted first name cannot be empty, but also cannot be longer than field size database.
    if(strlen($fname) == 0){
        $errors .= "You did not enter your first name<br/>";
    }
    else if(strlen($fname) > MAX_FIRST_NAME_LENGTH){
        $errors .= "Your first name needs to be less than " .MAX_FIRST_NAME_LENGTH. " characters, <em>". $fname ."</em> is too long<br/>";
        //empty out the invalid data
        $fname = "";
    }

    //the submitted last name cannot be empty, but also cannot be longer than field size database.
    if(strlen($lname) == 0){
        $errors .= "You did not enter your last name<br/>";
    }
    else if(strlen($lname) > MAX_LAST_NAME_LENGTH){
        $errors .= "Your last name needs to be less than " .MAX_LAST_NAME_LENGTH. " characters, <em>". $lname ."</em> is too long<br/>";
        //empty out the invalid data
        $lname = "";
    }

    //phone number validation
    if(strlen($phone) == 0){
        $errors .= "You did not enter your phone number<br/>";
    }
    else if(strlen($phone) != PHONE_LENGTH){
        $errors .= "Your phone number needs to be exactly " .PHONE_LENGTH. " numbers.<br/>";
        //empty out the invalid data
        $phone = "";
    }

    //if there are no errors
    if($errors==""){
        $created_on = date("Y-m-d",time());
        $conn = db_connect();
        $sql = "INSERT INTO contacts(email_address, first_name, last_name, phone_number, created_on) 
        VALUES ('".$email."', '".$fname."', '".$lname."', '".$phone."', '".$created_on."')";
        $results = pg_query($conn, $sql);

        if($results){
            header("Location:termtest3out.php");
            ob_flush();
        }
    }
}
?>

<p>
    This page contains a form that allows users to add contacts. To do so, please fill in the following fields.
</p>

<h2> 
    <?php echo $errors; ?>
</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table cellpadding="10">
        <tr><td>Email Address</td><td><input type="text" name="input_email" value="<?php echo $email ?>"/></td></tr>
        <tr><td>First Name</td><td><input type="text" name="input_fname" value="<?php echo $fname ?>"/></td></tr>
        <tr><td>Last Name</td><td><input type="text" name="input_lname" value="<?php echo $lname ?>"/></td></tr>
        <tr><td>Phone number</td><td><input type="text" name="input_phone" value="<?php echo $phone ?>"/></td></tr>
        <tr><td> <input type="submit" value="Register"/> </td><td><input type="reset" value="Clear"/></td></tr>
    </table>
</form>

<?php
    include ("./footer.php");
?>