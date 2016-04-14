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

        include __DIR__ . '/../templates/index.php';

    }

    public function aboutAction()

    {

        include __DIR__ . '/../templates/about.php';

    }

    public function contactAction()

    {

        include __DIR__ . '/../templates/contact.php';

    }

    public function loginAction()

    {

        include __DIR__ . '/../templates/login.php';

    }

    public function sitemapAction()

    {

        include __DIR__ . '/../templates/sitemap.php';

    }

} //close class MainController
