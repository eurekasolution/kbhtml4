<?php
    function connectDB()
    {
        $dbHost = "localhost";

        $dbUser = "star";
        $dbName = "star"; 
        $dbPass = "kbstar";
           
        $dbPort = "3306";

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort) or die("Connect Fail to MySQL for XAMPP : %s\n". $conn->error);
        return $conn;
    }

    function closeDB($conn)
    {
        $conn->close();
    }
?>