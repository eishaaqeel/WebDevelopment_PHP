<?php
    $title = "WEBD2201 - Eisha's Term Test 1";
    $file = "test1.php";
    $description = "This is my Term test 1 for the WEBD2201 course.";
    $date = "March 4, 2022";
    $banner = "WEBD2201 - Term Test 1";
    include ("./header.php");
?>
<!--Start of page content-->
            <td>
                <p>This web page will implement several topics that have been covered so far in the Web Development - Fundamentals 
                course this semester. This page implements the XHTML strict standard (validation image below), is laid out 
                    using HTML tables, and is styled using a Cascading Style Sheet.
                </p>
                <table style="margin-left:auto; margin-right:auto;" width="90%" border="1">
                    <tr>
                        <th colspan="8">
                            <h3>Canadian Network's Thursday Primetime TV Guide</h3>
                        </th>
                    </tr>
                    <tr>
                        <td align="center">
                            <b>Network</b>
                        </td>
                        <td align="center">
                            <b>Channel(s)</b>
                        </td>
                        <td align="center">
                            <b>7:00pm</b>
                        </td>
                        <td align="center">
                            <b>7:30pm</b>
                        </td>
                        <td align="center">
                            <b>8:00pm</b>
                        </td>
                        <td align="center">
                            <b>8:30pm</b>
                        </td>
                        <td align="center">
                            <b>9:00pm</b>
                        </td>
                        <td align="center">
                            <b>9:30pm</b>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" bgcolor="Navy">
                            <img src="./images/tvlogos/ctv.png" alt="CTV"/>
                        </td>
                        <td align="center">
                            201
                        </td>
                        <td>
                            etalk
                        </td>
                        <td>
                            The Big Bang Theory
                        </td>
                        <td>
                            Young Sheldon
                        </td>
                        <td>
                            B Positive
                        </td>
                        <td colspan="2">
                            Law &amp; Order
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            202
                        </td>
                        <td>
                            The Big Bang Theory
                        </td>
                        <td>
                            etalk
                        </td>
                        <td colspan="2">
                            Pandora
                        </td>
                        <td>
                            The Goldbergs
                        </td>
                        <td>
                            Seinfeld
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="Navy">
                            <img src="./images/tvlogos/global.png" alt="global"/>
                        </td>
                        <td align="center">
                            203
                        </td>
                        <td>
                            Entertainment Tonight
                        </td>
                        <td>
                            ET Canada
                        </td>
                        <td>
                            Call Your Mother
                        </td>
                        <td>
                            Superstore
                        </td>
                        <td>
                            The Neighhood
                        </td>
                        <td>
                            The Unicorn
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="Navy">
                            <img src="./images/tvlogos/cbc.png" alt="CBC"/>
                        </td>
                        <td align="center">
                            205
                        </td>
                        <td>
                            Coronation Street
                        </td>
                        <td>
                            Family Feud Canada
                        </td>
                        <td colspan="2">
                            Burden of Truth
                        </td>
                        <td colspan="2">
                            The Fifth Estate
                        </td>
                    </tr>
                </table>
                <span>NOTE: the channel guide above is loosely based on
                    <a href="https://tv.bell.ca/guide"><b><u>Bell Fibe's TV Guide</u></b></a></span>
            </td>
        </tr>
<!--End of page content-->
<?php
    include ("./footer.php");
?>