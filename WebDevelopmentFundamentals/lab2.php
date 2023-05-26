<?php
    $title = "WEBD2201 - Lab 2";
    $file = "lab2.php";
    $description = "This is lab 2 for my WEBD2201 website. As part of lab 3 I've removed stuff and did it in the css file instead.";
    $date = "March 4, 2022";
    $banner = "Lab 2 - HTML Tables";
    include ("./header.php");
?>
<!--Start of page content-->
                <!--Description at the top-->
                <p class="double">
                    This lab is all about creating HTML tables. I learned about the different table tags and what they are used for. This lab 
                    gave me practice in creating tables, aligning text and the tables themselves, and getting the size and place of each 
                    thing correctly displayed.
                </p>
                <!--The start of the first table which has 6 rows and 2 coloums-->
                <table border="1" width="60%" style="margin-left:auto; margin-right:auto;" id="tabletags">
                    <!--A caption above the table but still inside the lab 2 content-->
                    <caption>HTML Table Tags</caption>
                    <!--The first row with the two words bolded and centerd-->
                    <tr>
                        <th style="20%;">Tag</th>
                        <th style="80%;">Description</th>
                    </tr>
                    <!--The 2nd row which explains the table tag-->
                    <tr>
                        <td>&lt;table&gt;</td>
                        <td>Denotes the start of an HTML table in a web page</td>
                    </tr>
                    <!--The 3rd row which explains the tr tag-->
                    <tr>
                        <td>&lt;tr&gt;</td>
                        <td>
                            Denotes the start of a row in an HTML table (NOTE: these tags must exist inside &lt;table&gt;...&lt;/table&gt; tags in
                            order to be valid and work correctly)
                        </td>
                    </tr>
                    <!--The 4th row which explains the td tag-->
                    <tr>
                        <td>&lt;td&gt;</td>
                        <td>
                            Denotes a cell (or Table Data) in an HTML table (NOTE: these tags must exist inside &lt;tr&gt;...&lt;/tr&gt; tags in
                            order to be valid and work correctly)
                        </td>
                    </tr>
                    <!--The 5th row which explains the th tag-->
                    <tr>
                        <td>&lt;th&gt;</td>
                        <td>Very similar to the &lt;td&gt; tags described above but the text is bold and centered</td>
                    </tr>
                    <!--The last row of this 1st table which explains the caption tag-->
                    <tr>
                        <td>&lt;caption&gt;</td>
                        <td>
                            Will place a caption on an HTML table (NOTE: this tag must be implemented right after the opening &lt;table&gt; tag in
                            order to be valid and work correctly)
                        </td>
                    </tr>
                </table>
                <!--A horizontal row before the start of the second table, that is within lab 2-->
                <hr/>
                <!--This table has 4 rows and 4 coloumns, and it's about 3 of my favorite books-->
                <table style="margin-left:auto; margin-right:auto;" width="90%" border="1">
                    <tr>
                        <th width="20%">Title</th>
                        <th width="15%">Author</th>
                        <th width="5%">Year of Publication</th>
                        <th width="60%">Description</th>
                    </tr>
                    <tr>
                        <td>Iron Widow</td>
                        <td>Xiran Jay Zhao</td>
                        <td align="center">2021</td>
                        <td>This book is a sci-fi retelling of the rise of Wu Zetian, the only female emperor in Chinese history. 
                            The series follows an 18-year-old re-imagining of her as she avenges her sister's murder by an intensely patriarchal system.
                        </td>
                    </tr>
                    <tr>
                        <td>The Midnight Library</td>
                        <td>Matt Haig</td>
                        <td align="center">2020</td>
                        <td>This book is about Nora, a woman who is regretful about her life. She comes across the Midnight Library and the books
                            inside represent a portal into other variations of what her life could have been, and she gets to try out the different 
                            experiences. 
                        </td>
                    </tr>
                    <tr>
                        <td>We Were Liars</td>
                        <td>E. Lockhart</td>
                        <td align="center">2014</td>
                        <td>This is a mystery book about a wealthy family who spend every summer on their private island. The story focuses on the main 
                            character named Cadence. One summer Cadence suffers a head injury but she can not remember almost anything from that trip 
                            to the island. The following summer things are very different and Cadence has to try and remember why.
                        </td>
                    </tr>
                </table>
                <!--A horizontal line before the start of the 3 table within lab 2-->
                <hr/>
                <!--This table has 6 coloumns, and it's my schedule for this semester-->
                <table style="margin-left:auto; margin-right:auto;" width="99%" border="1">
                <caption>Schedule for Semester 2</caption>
                    <!--The first row has the days of the week-->
                    <tr>
                        <th width="16%"></th>
                        <th width="17%">Monday</th>
                        <th width="16%">Tuesday</th>
                        <th width="17%">Wednesday</th>
                        <th width="17%">Thursday</th>
                        <th width="17%">Friday</th>
                    </tr>

                    <tr>
                        <td>9:10am-10:00am</td>
                        <td></td>
                        <td id="course1" rowspan="2" valign="top">Linux</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>10:10am-11:00am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>11:10am-12:00pm</td>
                        <td></td>
                        <td id="course2" rowspan="2" valign="top">Object Oriented Programming I</td>
                        <td></td>
                        <td></td>
                        <td id="lunch1" align="center">LUNCH</td>
                    </tr>
                    
                    <tr>
                        <td>12:10pm-1:00pm</td>
                        <td id="lunch2" align="center">LUNCH</td>
                        <td id="lunch3" colspan="2" align="center">LUNCH</td>
                        <td id="course3" rowspan="2" valign="top">Economics<br/>GNED</td>
                    </tr>
                    
                    <tr>
                        <td>1:10pm-2:00pm</td>
                        <td></td>
                        <td id="lunch4" align="center">LUNCH</td>
                        <td id="course4" rowspan="2" valign="top">Linux</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>2:10pm-3:00pm</td>
                        <td id="course5" rowspan="2" valign="top">NET Development I</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>3:10pm-4:00pm</td>
                        <td></td>
                        <td id="course6" rowspan="2" valign="top">Web Development Fundamentals</td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>4:10pm-5:00pm</td>
                        <td id="course7" rowspan="2" valign="top">Web Development Fundamentals</td>
                        <td></td>
                        <td id="course8" valign="top">NET Development I</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>5:10pm-6:00pm</td>
                        <td></td>
                        <td></td>
                        <td id="course9" rowspan="2" valign="top">Object Oriented Programming I</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>6:10pm-7:00pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>7:10pm-8:00pm</td>
                        <td id="course10" rowspan="2" valign="top">Systems Development I</td>
                        <td></td>
                        <td id="course11" valign="top">Systems Development I</td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>8:10pm-9:00pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
<!--End of page content-->
<?php
    include ("./footer.php");
?>