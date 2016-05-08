<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 07/04/2016
 * Time: 08:44
 */

namespace mainController;

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

        require_once __DIR__ . '/../templates/Contact.php';

    }

    public function loginAction()

    {

        require_once __DIR__ . '/../templates/Login.php';

    }

    public function sitemapAction()

    {

        require_once __DIR__ . '/../templates/sitemap.php';

    }

} //close class MainController
