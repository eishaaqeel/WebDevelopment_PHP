<?php
    $title = "WEBD2201 - Lab7: Bond Movies";
    $file = "lab7_bond_info.php";
    $description = "This is part of the lab 7, it is for retrieving Bond movies from a database.";
    $date = "March 23, 2022";
    $banner = "Lab7 - Bond Movies";
    include ("./header.php");
?>

<p>
This page uses some PostgreSQL method calls, such as pg_connect(), pg_query(), pg_num_rows(), and pg_fetch_result().
It retrieves Bond Movies from my database. 
</p>
<!-- star the setup of the table -->
<table border="1" width="75%">
	<tr><th>Movie</th><th>Year</th><th>Actor</th></tr>

<?php
//Set up a variable to store the output of the loop 
$output = "";

//connect to the database using my function
$conn = db_connect();

//issue the query
$sql = "SELECT movies.title, movies.year, actors.name
			FROM movies, actors
			WHERE movies.actor=actors.id
			ORDER BY movies.year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

	//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>"; 
	}

	//display the output
	echo $output;
?>

<!-- end the table -->
</table>

<?php
    include ("./footer.php");
?>
