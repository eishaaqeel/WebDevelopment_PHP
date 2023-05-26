<?php
    $title = "WEBD2201 - Lab 10";
    $file = "lab10.php";
    $description = "This is a user Registration page and created using a database and PHP.";
    $date = "April 6, 2022";
    $banner = "Lab 10 - User Registration";
    include ("./header.php");

$errors="";
//first time the page loads in the default GET mode, so below are empty string variable:
if($_SERVER["REQUEST_METHOD"] == "GET"){
	$id = ""; 
	$pass1 = "";
	$pass2 = "";
    $fname = "";
    $lname = "";
    $email = "";
}
elseif($_SERVER['REQUEST_METHOD']=="POST"){
        $id = trim($_POST['input_id']);
        $pass1 = trim($_POST['input_pass1']);
        $pass2 = trim($_POST['input_pass2']);
        $fname = trim($_POST['input_fname']);
        $lname = trim($_POST['input_lname']);
        $email = trim($_POST['input_email']);
        $conn = db_connect();

        //the entered user id must be at least 5 characters, and less than 20 characters
        if(strlen($id) == 0){
            $errors .= "You did not enter a user id<br/>";
        }
        else if(strlen($id) < MINIMUM_ID_LENGTH){
            $errors .= "A user id must be at least " .MINIMUM_ID_LENGTH. " characters, <em>". $id ."</em> is not long enough<br/>";
            //empty out the invalid data
		    $id = "";
        }
        else if(strlen($id) > MAXIMUM_ID_LENGTH){
            $errors .= "A user id must be less than " .MAXIMUM_ID_LENGTH. " characters, <em>". $id ."</em> is too long<br/>";
            //empty out the invalid data
		    $id = "";
        }
        //also, id enteed should NOT already exist in your database.
        else{
            $sql = "SELECT * FROM users WHERE id = '$id'";
            $results = pg_query($conn, $sql);

            if(pg_num_rows($results)){
                $errors .= "The user id <em>". $id ."</em> already exists in our system. Please try another.<br/>";
                //empty out the invalid data
		        $id = "";
            }
        }

        //password validation
        if(strlen($pass1) == 0){
            $errors .= "You did not enter a password<br/>";
        }
        //the submitted password and confirm password should be verfied to be the same string (use the strcmp() function to determine this).
        else if(strcmp($pass1, $pass2)){
            $errors .= "The password and confirm password were not the same<br/>";
            //empty out the invalid data
		    $pass2 = "";
        }
        else if(strlen($pass1) < MINIMUM_PASSWORD_LENGTH){
            $errors .= "Your password must be at least " .MINIMUM_PASSWORD_LENGTH. " characters<br/>";
            //empty out the invalid data
            $pass1 = "";
		    $pass2 = "";
        }
        else if(strlen($pass1) > MAXIMUM_PASSWORD_LENGTH){
            $errors .= "Your password cannot be more than " .MAXIMUM_PASSWORD_LENGTH. " characters<br/>";
            //empty out the invalid data
            $pass1 = "";
		    $pass2 = "";
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
        //first name also can't be a number
        else if(is_numeric($fname)){
            $errors .= "Your first name cannot be a number, you entered, " .$fname. " <br/>";
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
        //last name also can't be a number
        else if(is_numeric($lname)){
            $errors .= "Your last name cannot be a number, you entered, " .$lname. " <br/>";
            //empty out the invalid data
            $lname = "";
        }

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

        if($errors==""){
            $enrol_date = date("Y-m-d",time());
            $last_access = date("Y-m-d",time());
            $conn = db_connect();
            $sql = "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
            VALUES ('".$id."', '".$pass1."', '".$fname."', '".$lname."', '".$email."', '".$enrol_date."', '".$last_access."')";
            $results = pg_query($conn, $sql);

            if($results){
                header("Location:lab9.php");
                ob_flush();
            }
        }
    }
?>
<p class="double">
This is a registration page.
Your input is checked using defined constants and by making this form sticky. 
You will get specific error messages for each possible error.
Valid registrations will be saved in a database and you can then log in by going to the User Login page (Lab 9).
Users will not be able to register if the ID is already in the database, so each ID needs to be unique.  
</p>

<h2> <?php echo $errors; ?></h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<table cellpadding="10">
    <tr><td>Login ID</td><td><input type="text" name="input_id" value="<?php echo $id ?>"/></td></tr>
    <tr><td>Password</td><td><input type="password" name="input_pass1" value="<?php echo $pass1 ?>"/></td></tr>
    <tr><td>Confirm Password</td><td><input type="password" name="input_pass2" value="<?php echo $pass2 ?>"/></td></tr>
    <tr><td>First Name</td><td><input type="text" name="input_fname" value="<?php echo $fname ?>"/></td></tr>
    <tr><td>Last Name</td><td><input type="text" name="input_lname" value="<?php echo $lname ?>"/></td></tr>
    <tr><td>Email Address</td><td><input type="text" name="input_email" value="<?php echo $email ?>"/></td></tr>
    <tr><td> <input type="submit" value="Register"/> </td><td><input type="submit" value="Clear"/></td></tr>
</table>

</form>

<?php
    include ("./footer.php");
?>