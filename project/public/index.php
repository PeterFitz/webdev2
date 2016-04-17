<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 05/04/2016
 * Time: 16:04
 */

require_once __DIR__ . '/../vendor/autoload.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$mainController = new mainController\MainController();

/*if ('about' == $action)

{

    // show the about page
    $mainController->aboutAction();

}

else

{

    // default - home page
    $mainController->indexAction();

}*/


switch ($action)

{

    case "about":
        // show the about page
        $mainController->aboutAction();
        break;

    case "contact":
        // show the contact page
        $mainController->contactAction();
        break;

    case "login":
        // show the login page
        $mainController->loginAction();
        break;

    case "sitemap":
        // show the sitemap page
        $mainController->sitemapAction();
        break;

    default:
        // show the index page by default
        $mainController->indexAction();

} // close switch



