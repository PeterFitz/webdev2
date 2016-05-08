<?php
require_once 'header1.inc.php';
print '<title>Contact</title>';
require_once 'header2.inc.php';
//-------------------------------------------
?>


    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>

            <li>
                <a href="index.php?action=about">About</a>
            </li>

            <li>
                <a href="index.php?action=contact" class="current_page">Contact</a>
            </li>

            <li>
                <a href="index.php?action=login">Login</a>
            </li>

            <li>
                <a href="index.php?action=sitemap">Site Map</a>
            </li>
        </ul>
    </nav>

<h1>
    Contact Us
</h1>


<h3>Telephone</h3>
<p>
    01 - 000 - 1000
</p>
    <br/>

<h3>Email</h3>
<p>
    <a href="mailto:b00037296@student.itb.ie">b00037296@student.itb.ie</a>
</p>
    <br/>

<h3>Address</h3>

    Total Fitness<br/>
    7 Ocean Road<br/>
    Greystones<br/>
    Co.Wicklow<br/>

<br/>
    <br/>
<h3>Contact Form</h3>

    <form action="../src/ContactFormHandler.php" method="post">
        First name:<br>
        <input type="text" name="firstname" value=""><br>
        Last name:<br>
        <input type="text" name="lastname" value=""><br>
        Email:<br>
        <input type="email" name="email" value="" required><br>
        Phone Number:<br>
        <input type="tel" name="tel" value=""><br><br>
        Message:<br>
        <input type="text" name="message" value="" size="100" maxlength="500"><br><br>
        <input type="submit" value="Submit">
    </form>




<?php
//-------------------------------------------
require_once __DIR__ . '/../templates/footer.inc.php';

//  don't close the PHP tags