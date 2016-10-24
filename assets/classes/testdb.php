<?php 
    include "db.php";
    $var = get_MySQLi_Connection();
    if (isset($var)){
        echo "yes";
    }else{
        echo "no";
    }