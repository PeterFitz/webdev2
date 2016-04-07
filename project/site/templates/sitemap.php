<?php
require_once 'header1.inc.php';
print '<title>Site Map</title>';
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
                <a href="index.php?action=contact">Contact</a>
            </li>

            <li>
                <a href="index.php?action=login">Login</a>
            </li>

            <li>
                <a href="index.php?action=sitemap" class="current_page">Site Map</a>
            </li>
        </ul>
    </nav>

<h1>
    Site Map
</h1>

<ul>
    <li><a href="index.php">Home</a>
    <li><a href="about.php">About</a>
    <li><a href="contact.php">Contact</a>
    <li><a href="login.php">Login</a>
    <li><a href="sitemap.php">Site Map</a>
</ul>


<?php
//-------------------------------------------
require_once 'footer.inc.php';

//  don't close the PHP tags