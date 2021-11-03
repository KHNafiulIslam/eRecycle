<?php
    function connect(){
        $db = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "erecycle";

        $conn = new mysqli($db,$user,$pass,$dbName);
        return $conn;
    }
    function closeConnect($cn)
    {
        $cn->close();
    }
?>