<?php
function get_Connection(){
    $servername = "localhost";
    $username = "adamunbh_csc434";
    $password = "ThisAccountWillBeDeleted";
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

//This is a helper class that helps format the data into a table.
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        //ill figure out what this does later, W3Schools gave me this class to make data population easier.
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}

?>