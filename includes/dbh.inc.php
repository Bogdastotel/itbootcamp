<?php 

class Dbh {

    private $localhost;
    private $username;
    private $password;
    private $database;


    protected function connect() {
        $this->localhost = 'localhost';
        $this->username = 'admin';
        $this->password = 'admin123';
        $this->database = 'mreza';

        $conn = new mysqli($this->localhost,  $this->username,  $this->password, $this->database);


        return $conn;

    }

}

?>