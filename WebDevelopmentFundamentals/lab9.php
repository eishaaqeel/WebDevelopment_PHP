<?php
    $title = "WEBD2201 - Lab 9";
    $file = "lab9.php";
    $description = "This is lab 9 for my WEBD2201 Website. This is a user login page and I used a database and PHP to create it.";
    $date = "April 4, 2022";
    $banner = "Lab 9 - User Login";
    include ("./header.php");

$output = "";
$error = "";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $_POST['id_input'];
    $password = $_POST['pass_input'];
    $conn = db_connect();
    $sql = "SELECT first_name, last_name, email_address, last_access FROM users WHERE id = '".$id."' AND password= '".$password."'";
    $results = pg_query($conn, $sql);

    //if the user was found, use pg_fetch_result to pull user specific info to display
    if(pg_num_rows($results)){
        $first = pg_fetch_result($results, 0, 'first_name');
        $last = pg_fetch_result($results, 0, 'last_name');
        $email = pg_fetch_result($results, 0, 'email_address');
        $access = pg_fetch_result($results, 0, 'last_access');
        
        //update the last access time
        $sql = "UPDATE users SET last_access = '" . date("Y-m-d",time()) . "' WHERE id = '" . $id . "'";
        
        $results = pg_query($conn, $sql);

        $output.="Welcome Back $first $last </br> Our records show that your email address is $email </br> and 
        you last accessed our system: $access";

    }
    else{
        //select the id and password from the users table
        $sql = "SELECT * FROM users WHERE id = '".$id."' AND password = '".$password."'";
        $results = pg_query($conn, $sql);

        // if that row was not found, show an error message
        if(!pg_num_rows($results)){ 
        $error.="Error: Login/password not found in the database, try again";
        $id = "";
        }
    }
}
?>

<p class="double">This is a login page that uses PHP to get information from an HTML form. 
    It verifies that both a login id and a password are provided by the user by checking
    a database. If the user does not exist in the system there will be error messages specific
    to the problem. If the user does exist it will give a welcome back message.</br>
    Here is the link to the <a href="./sql/lab9_users.sql">Users records.</a>
</p>

<center>
<h3>Please log in</h3>
<h4><?php echo $output?></h4>
<h2><?php echo $error?></h2>
<p>Enter your login ID and password to connect to this system</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table bgcolor="lightgoldenrodyellow" cellpadding="10">
<tr>
    <td>Login ID</td>
    <td><input type="text" name="id_input"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="pass_input"></td>
</tr>
<tr>
    <td><input type="submit"></td>
    <td><input type="reset"></td>
</tr>
</table>
</form>
</center>

<?php
    include ("./footer.php");
?>