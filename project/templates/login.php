<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 07/04/2016
 * Time: 09:57
 */

require_once 'header1.inc.php';
print '<title>Login</title>';
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
                <a href="index.php?action=login" class="current_page">Login</a>
            </li>

            <li>
                <a href="index.php?action=sitemap">Site Map</a>
            </li>
        </ul>
    </nav>


<h3>Please Enter Your Login Details:</h3>

    <form action="../src/loginFormHandler.php" method="post">
        Username:<br>
        <input type="text" name="username" value="" required><br>
        Password:<br>
        <input type="password" name="password" value="" required><br><br>
        <input type="submit" value="Login">
    </form>


<?php
//-------------------------------------------
require_once 'footer.inc.php';

//  don't close the PHP tags