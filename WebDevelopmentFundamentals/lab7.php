<?php
    $title = "WEBD2201 - Lab 7";
    $file = "lab7.php";
    $description = "This is the lab 7 page for my WEBD2201 Website. It is the first page with a PostgreSQL database, feeding page content through PHP.";
    $date = "March 23, 2022";
    $banner = "Lab 7 - Database Intro";
    include ("./header.php");
?>
<p class="double">
This lab is the first time I utilized a PostgreSQL database.
The two PHP links below will display the tables of Movies and Automobiles, and the two SQL links are to show my scripts.
</p>
    <ul>
    <li><a href="./lab7_bond_info.php">lab7_bond_info.php</a></li>
    <li><a href="./sql/lab7_bond_movies.sql">lab7_bond_movies.sql</a></li>
    <li><a href="./lab7_auto_info.php">lab7_auto_info.php</a></li>
    <li><a href="./sql/lab7_auto_records.sql">lab7_auto_records.sql</a></li>
    </ul>

<?php
    include ("./footer.php");
?>