<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 10/02/2016
 * Time: 22:04
 */



$username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

/*echo "You entered username: " . $_POST['username'] . " and password: " . $_POST['password'];*/

echo "You entered username: " . $username . " and password: " . $password;


