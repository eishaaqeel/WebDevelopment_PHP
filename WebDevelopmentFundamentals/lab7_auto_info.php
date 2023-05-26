<?php
    $title = "WEBD2201 - Lab7: Automobiles";
    $file = "lab7_auto_info.php";
    $description = "This is part of the lab 7, it is for retrieving automobiles from a database.";
    $date = "March 23, 2022";
    $banner = "Lab7 - Automobiles";
    include ("./header.php");
?>

<p>
This page uses some PostgreSQL method calls, such as pg_connect(), pg_query(), pg_num_rows, and pg_fetch_result(). 
It is for retrieving automobiles from a database.
</p>

<!-- setup the table -->
<table border="1" width="75%">
	<tr><th>Make</th><th>Model</th><th>Year</th><th>MSRP</th></tr>

<?php
//Set up a variable to store the output of the loop
$output = ""; 

//connect to the database using my function
$conn = db_connect();

//issue the query
$sql = "SELECT make, model, year, msrp
			FROM automobiles
			ORDER BY year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

	//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>";
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>$".pg_fetch_result($result, $i, "msrp")."</td>\n\t</tr>"; 
	}

	//display the output
	echo $output;
?>

<!-- end the table -->
</table>

<?php
    include ("./footer.php");
?>
