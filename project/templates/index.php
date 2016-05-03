<?php
/*require_once __DIR__ . '/../templates/header1.inc.php';*/
require_once 'header1.inc.php';
print '<title>Home</title>';
require_once 'header2.inc.php';
//-------------------------------------------
?>

<nav>
    <ul>
        <li>
            <a href="index.php" class="current_page">Home</a>
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
            <a href="index.php?action=sitemap">Site Map</a>
        </li>
    </ul>
</nav>

<h1>
Total Fitness Gym & Leisure
</h1>

<p>
This site offers information on health and fitness, bookings with a personal trainer and access to our member area
</p>


<?php
//-------------------------------------------
require_once 'footer.inc.php';

//  don't close the PHP tags