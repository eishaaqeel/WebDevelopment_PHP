<?php
    $title = "termtest3out";
    $file = "termtest3out.php";
    $description = "This is the one out of two pages for my WEBD2201 Term Test 3. This page is for viewing the content of the contacts table.";
    $date = "April 20, 2022";
    $banner = "Term Test 3 - View Contacts (termtest3out.php)";
    include ("./header.php");
?>

<p>
    This page is for viewing the content of the Contacts table.
</p>

<!-- setup the table -->
<table border="1" width="90%">
	<tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Created ON</th></tr>

<?php
$output = ""; //Set up a variable to store the output of the loop 
$conn = db_connect();
$sql = "SELECT email_address, first_name, last_name, phone_number, created_on FROM contacts ORDER BY last_name ASC";

$result = pg_query($conn, $sql);
$records = pg_num_rows($result);

//generate the table
for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
    $output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "email_address")."</td>"; 
    $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "first_name")."</td>";
    $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "last_name")."</td>";
    $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "phone_number")."</td>";
    $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "created_on")."</td>\n\t</tr>"; 
}

echo $output; //display the output
?>

<!-- end the table -->
</table>

<?php
    include ("./footer.php");
?>