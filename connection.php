<?php
    class connection{

        private $conn;

        function __construct()
        {
            
        }

        //method is to connect our mysq database
        function connect_to_mysql_database(){

            $this->conn = new PDO("mysql:host=localhost;dbname=blog","root","");
            return $this->conn;
        }
    }
?>