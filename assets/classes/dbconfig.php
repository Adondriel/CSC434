<?php
$servername = "localhost";
$username = "adamunbh_csc434";
$password = "ThisAccountWillBeDeleted";


function get_Connection(){
    try {
        $conn = new PDO("mysql:host=$servername;dbname=adamunbh_csc434", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

?>