<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 02/05/2016
 * Time: 20:38
 */


$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

/*print $username + '' + $password;*/

echo "Username: $username <br> Password: $password";


phpinfo();