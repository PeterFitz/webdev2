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
    <li><a href="../public/index.php">Home</a>
    <li><a href="../public/index.php?action=about">About</a>
    <li><a href="../public/index.php?action=contact">Contact</a>
    <li><a href="../public/index.php?action=login">Login</a>
    <li><a href="../public/index.php?action=sitemap">Site Map</a>
</ul>


<?php
//-------------------------------------------
require_once 'footer.inc.php';

//  don't close the PHP tags