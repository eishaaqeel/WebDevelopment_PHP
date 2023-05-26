<?php
	$title = "WEBD2201 - Lab 4: Tags";
	$file = "lab4tags.php";
	$description = "Lab 4, textbook example 1.";
	$date = "March 4, 2022";
	$banner = "PHP Start and End Tags";
	include("./header.php");
?>
<!--Start of page content-->
<p>
This page will illustrate the three different ways you can embed PHP code into web pages.
</p>

<table border="1" width="90%" style="margin-left:auto; margin-right:auto;">
    <caption>Basic PHP Start and End Tags</caption>
    <!--The first row with the words bolded and centerd-->
    <tr>
        <th width="10%">Method</th>
        <th width="45%">Opening Tag</th>
        <th width="45%">Closing Tag</th>
    </tr>
    <!--Row2-->
    <tr>
    <td>1.</td>
    <td>&lt;?php</td>
    <td>?&gt;</td>
    </tr>
    <!--Row3-->
    <tr>
    <td>2.</td>
    <td>&lt;?</td>
    <td>?&gt;</td>
    </tr>
    <!--Row4-->
    <tr>
    <td>3.</td>
    <td>&lt;script language="php"&gt;</td>
    <td>&lt;/script&gt;</td>
    </tr>
</table></br>

<h4>Textbook Code Example:</h4>
<p>
    <?php
        echo "<P>This is a test using the second tag type.</P>";
    ?>

    *The other 2 php tag types are not supported by the opentech server.
</p>

<!--End of page content-->
<?php
    include ("./footer.php");
?>