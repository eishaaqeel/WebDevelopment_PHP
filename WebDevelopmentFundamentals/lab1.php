<?php
    $title = "WEBD2201 - Lab 1";
    $file = "lab1.php";
    $description = "This is my lab 1 for the WEBD2201 course. As part of lab 3 I've removed stuff and did it in the css file instead.";
    $date = "March 4, 2022";
    $banner = "Lab 1 - XHTML Overview";
    include ("./header.php");
?>

<h3>Einstein's Relativity</h3>
<p>For the following Einstein's Relativity formula I use the superscript and italic tags.</p>
<h2><i>E = mc<sup>2</sup></i></h2>
<!-- adding a horizontal line after each section -->
<hr/>

<h3>Currency Conversion</h3>
<p>For the following Currency Conversion I use the special characters ampersand "pound" followed by a semicolon, 
    ampersand "euro" followed by a semicolon, and the ampersand "yen" followed by a semicolon.</p>
<h2>$1.00CDN = $0.703USD = &pound;0.487 = &euro;0.651 = &yen;82.77</h2>
<hr/>

<h3>Code Snippet</h3>
<p>For the following Code Snippet I use the special characters ampersand "lt" followed by a semicolon, 
    ampersand "gt" followed by a semicolon, and ampersand "nbsp" followed by a semicolon. I also use the code tag. </p>
<h2>
    <code>
        #include &lt;iostream.h&gt;<br/>
        int main()<br/>
        {<br/>
            &nbsp;&nbsp;&nbsp; cout &lt;&lt; "Hello World!" &lt;&lt; endl;<br/>
            &nbsp;&nbsp;&nbsp; return 0;<br/>
        }<br/>
    </code>
</h2>
<hr/>

<h3>Chemistry Equation</h3>
<p>For the following chemistry equation I use the sub tag, to put some of the twos toward the bottom.</p>
<h2>2H<sub>2</sub> + O<sub>2</sub> => 2H<sub>2</sub>O + heat</h2>
<hr/>
<h3>List Example (order important)</h3>
<p>For the following list example I use the ol and li tags, which number the list. </p>
<h2>How to start a car</h2>
<ol><li>Place key in the ignition</li><li>Depress the brake pedal</li><li>Turn the ignition key</li></ol> 
<hr/>

<h3>List Example (order unimportant)</h3>
<p>For the following list example I use the ul and li tags, which create the bullet point list. 
    I also use the special character ampersand "amp" followed by a semicolon, to display an ampersand in my text.
</p>
<h2>Things to do before my trip</h2>
<ul class="b">
    <li>Renew passport</li>
    <li>Convert currency</li>
    <li>Print out reservations &amp; itineraries</li>
    <li>Verify vaccinations are up-to-date</li>
</ul>

<?php
    include ("./footer.php");
?>