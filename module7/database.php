<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';

    try{
        Sconn = new PDO("mysql:host=$host; , $user,$pass");
        echo "Connected";

        $sql = "CREATE DATABASE mydb";
        $con->exec($sql);
        echo "Database is created";

    }catch(Exxemption $e){
        echo "Not connected";
    }

?>