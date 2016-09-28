<?php
//Author: Adam Pine
function get_Connection(){
    //set the vars to connect to the database.
    $servername = "localhost";
    $username = "adamunbh_csc434";
    $password = "ThisAccountWillBeDeleted";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=adamunbh_csc434", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

//Src: W3Schools provided the code, but I made sure to figure out how it actually functions, and why.
//Recursive iterator helps us iterate through and interator, or basically this helps us make a table out of a "2D array" from the table results.
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
    //this gets the current data value, for the current child, and surrounds it with <td> </td> so that it is formatted by the table correctly.
    function current() {
        return "<td>" . parent::current(). "</td>";
    }
    //when we start to read the row, print out a <tr>
    function beginChildren() { 
        echo "<tr>"; 
    } 
    //when we don't have anymore children left in this row, end the row with </tr> and a \n.
    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}

?>