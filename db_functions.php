<?php
    class db_functions{

        private $conn;

        function __construct(){
            
            require_once 'connection.php';
            $database = new connection();

            $this->conn = $database->connect_to_mysql_database();

        }

        //method to insert data using SQL command:

        public function insert_data($lastname,$firstname){

            $sql ="INSERT INTO users(lastname,firstname)VALUES(?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($lastname,$firstname));
            $result = $stmt->fetch();
            return $result;
        }
    }
?>