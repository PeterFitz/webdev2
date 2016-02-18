<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 11/02/2016
 * Time: 10:37
 */


$username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

if ('bond' == $password)
{

    echo 'password correct <br>';

}

else

{

    echo 'password incorrect <br>';

}

echo "You entered username: " . $username . " and password: " . $password;
