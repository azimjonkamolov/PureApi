<?php
    class Database
    {
        // DB Params
        private $host = 'localhost';
        private $db_name = 'pureapi';
        private $username = 'root';
        private $password = '';
        private $conn;

        // DB Connect
        public function connect()
        {
            $this->conn = null;

            try
            {
                $this->conn = new PDO('mysql:host=' . $this->host. ';dbname=' . $this->db_name, $this->username, $this->password );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $erorr)
            {
                echo 'Connect Error: ' . $erorr->getMessage();
            }
            
            return $this->conn;
        }


    }
?>