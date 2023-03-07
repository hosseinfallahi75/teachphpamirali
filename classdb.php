<?php
    class DB{
        private $server;
        private $pass;
        private $user;
        private $dbname;
        private $conection;
        private $result;
        function connect($server,$user,$pass,$dbname){
            $this->server = $server;
            $this->user = $user;
            $this->pass = $pass;
            $this->server = $dbname;
            $this->conection = mysqli_connect($server,$user,$pass,$dbname); 
        }
        function query($query){
            $this->result=mysqli_query($this->conection,$query);
            return $this->result;
        }
    }



?>