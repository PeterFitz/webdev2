<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 04/05/2016
 * Time: 14:14
 */

namespace database;

class Database

{

    private $servername;
    private $username;
    private $password;
    private $dbname;

    function __construct($servername, $username, $password, $dbname)

    {

        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

    }

    function connectToDB ()

    {

        try

        {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";
        }

        catch(PDOException $e)

        {

            echo "Connection failed: " . $e->getMessage();

        }


    }



    // getters and setters for member variables
    public function getServername()

    {

        return $this->servername;

    }

    public function setServername($servername)

    {

        $this->servername = $servername;

    }


    public function getUsername()

    {

        return $this->username;

    }


    public function setUsername($username)

    {

        $this->username = $username;

    }


    public function getPassword()

    {

        return $this->password;

    }


    public function setPassword($password)

    {

        $this->password = $password;

    }

    public function getdbname()

    {

        return $this->dbname;

    }


    public function setdbname($dbname)

    {

        $this->dbname = $dbname;

    }






}
