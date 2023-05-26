<?php
    $title = "WEBD2201 - Lab 3";
    $file = "lab3.php";
    $description = "This is lab 3 for my WEBD2201 website.";
    $date = "March 4, 2022";
    $banner = "Lab 3 - Formatting and Layout with CSS";
    include ("./header.php");
?>
<!--Start of page content-->
                <!--Purpose of this page-->
                <p class="double">This lab is all about formatting and layout, with cascading style sheets (CSS). I created a CSS file and then linked it 
                    to my pages. I've learned how to comment and validate both CSS and HTML files. This lab required us to 
                    create style selectors for ten different HTML elements or classes of elements. On this page, I describe all ten selectors 
                    I choose to implement in my web pages.
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--First selector described-->
                <p>First I added a body selector, that defines the font, background color, and the color of the text on all of my previous web pages.
                    I made sure to remove the bgcolor and text attributes from the &lt;body&gt; tags from the HTML files.
                    The following is what I added in my css file.<br/><br/>
                    body{font-family: Arial; background-color: pink; color: green;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Second selector described-->
                <p>The second selector I added was for the &lt;th&gt; (table heading) elements. So it affected the first row of each of the 3 tables 
                    on my lab 2 HTML Tables page. I changed the text color to red and the background color to a different shade of pink. The syntax is below.<br/><br/>
                    th{color: red; background-color: darksalmon;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Third selector described-->
                <p>Then I set the colors for my schedule table which is on the HTML Tables page. I set the background color of lunch times to yellow, and class times to 
                    turquoise. I used the id selector to do this. The id selector uses the id attribute of an HTML element, to select a specific element.
                    The syntax looks like the following lines, but for each class or lunch time the id needs to be different to pass validation.<br/><br/><br/>
                    #course1{background-color: turquoise;}<br/><br/>
                    #lunch1{background-color: yellow;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Forth selector described-->
                <p>Next I added style selectors for the &lt;a&gt; style pseudo-elements (The four different states of an anchor/link: a:link; a:visited; a:active; and, a:hover). 
                    The syntax is below.<br/><br/><br/>
                    For an unvisited link:<br/>
                    a:link {color: orange;}<br/><br/>
                    For a visited link:<br/>
                    a:visited {color: green;}<br/><br/>
                    For when the mouse is over the link:<br/>
                    a:hover {color: hotpink;}<br/><br/>
                    For a selected link:<br/>
                    a:active {color: blue;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Fifth selector described-->
                <p>For the fifth selector, I added a selector that made the table borders collapse, it removed double borders from all tables on all pages.
                    The syntax is below.<br/><br/>
                    table {border-collapse: collapse;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Sixth selector described-->
                <p>The sixth selector I choose added a text shadow effect to all my top headings, on all pages. The syntax is below.<br/><br/>
                    h1 {text-shadow: 2px 2px 5px lightseagreen;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Seventh selector described-->
                <p>The seventh selector can be used for unordered lists. 
                    I choose it to make the bullet points, in the last section of my XHTML Overview page, open circles. 
                    On my lab 1 file I had to first declare class="b" in &lt;ul&gt;. Then I could use the following syntax in my css file.<br/><br/>
                    ul.b {list-style-type: circle;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Eighth selector described-->
                <p>Then to make the main table on each page fit 100% I used the width selector. First I had to remove the width from the HTML files and 
                    then I gave all four tables unique IDs in &lt;table&gt; on my HTML pages. Then I typed the following in my css file.<br/><br/>
                    #table1, #table2, #table3, #table4{width: 100%;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Ninth selector described-->
                <p>The ninth selector I used adds a double border to the description paragraphs on my labs. The syntax is below.<br/><br/>
                    p.double {border-style: double;}
                </p>
                <!--Add a horizontal line-->
                <hr/>
                <!--Tenth selector described-->
                <p>The tenth selector makes the rows change color when hovering over them. I added this selector to the first table on my lab 2 page (HTML Table Tags).
                    First I created an id for the table in the HTML Lab 1 file, and then I typed the following syntax in my css file.<br/><br/>
                    #tabletags tr:hover {background-color: lightcyan;}
                </p>
            </td>
        </tr>
<!--End of page content-->
<?php
    include ("./footer.php");
?>