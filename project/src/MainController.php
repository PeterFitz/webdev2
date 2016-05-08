<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 07/04/2016
 * Time: 08:44
 */

/*namespace mainController;*/

require_once __DIR__ . '/Database.php';


class MainController

{

    public function indexAction()

    {

        require_once __DIR__ . '/../templates/index.php';

    }

    public function aboutAction()

    {

        require_once __DIR__ . '/../templates/about.php';

    }

    public function contactAction()

    {

        require_once __DIR__ . '/../templates/contact.php';

    }

    public function loginAction()

    {

        require_once __DIR__ . '/../templates/login.php';

    }

    public function sitemapAction()

    {

        require_once __DIR__ . '/../templates/sitemap.php';

    }

    public function enterLoginDetails($username, $password)

    {

        echo "Username: $username <br> Password: $password";

        $dbConnection = new Database('localhost', 'root', 'password', 'totalfitness');

        $dbConnection->connectToDB();

        $dbConnection->loginAttempt($username, $password);

    }

} //close class MainController
