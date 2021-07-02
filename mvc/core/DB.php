<?php

class DB{

    public $con;
    protected $server = "localhost";
    protected $username = "dthaa";
    protected $password = "dung12345";
    protected $dbname = "technify";
    function __construct(){
        $this->con = mysqli_connect($this->server, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
        
    }
}

?>
