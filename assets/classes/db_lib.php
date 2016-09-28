<?php
    //Author: Adam Pine
    include("db.php");
    include("amazon_lib.php");


    function createTables(){
        $conn = get_Connection();

        try{
            // sql to create table
            $sql = "DROP TABLE IF EXISTS TV;
                    CREATE TABLE TV (
                        TVId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                        tvCondition VARCHAR(100),
                        tvName VARCHAR(200),
                        manufacturer VARCHAR(50),
                        price decimal(6,2),
                        stock int(6),
                        screenSize VARCHAR(50),
                        resolution VARCHAR(50)
                    );
                    DROP TABLE IF EXISTS COMPUTER;
                    CREATE TABLE COMPUTER(
                        compId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                        compCondition VARCHAR(100),
                        name VARCHAR(200),
                        manufacturer VARCHAR(50),
                        price decimal(6,2),
                        stock int(6),
                        Ram VARCHAR(50),
                        CpuManu VARCHAR(50),
                        GCard VARCHAR(50)
                    );
            ";
            //use exec because no results are returned.
            $conn->exec($sql);
            //echo "Tables created successfully";
        }catch(PDOException $e){
            //catch any errors.
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;

    }

    function insertTv($value){
        //get the connection
        $conn = get_Connection();
        //setup all the variables needed to insert. Make sure the strings are wrapped in quotes correctly.
        $cond = $conn->quote($value->getCondition());
        $name = $conn->quote($value->getName());
        $manuf = $conn->quote($value->getManufacturer());
        $price = $value->getPrice();
        $stock = $value->getStock();
        $screenSize = $conn->quote($value->getScreenSize());
        $resolution = $conn->quote($value->getResolution());
        
        try{
            //prepare the sql statement that needs to be run, insert the variables. at this point,
            //I don't need to specify which var is in which order, but I can do that later if needed.
            $sql = "INSERT INTO TV VALUES (DEFAULT, $cond, $name, $manuf, $price, $stock, $screenSize, $resolution);";
            //use exec() because it doesn't return any data when I run this statement. 
            $conn->exec($sql);
        }catch(PDOException $e){
            //catch any errors.
            echo $sql . "<br>" . $e->getMessage();
        }
        //close the connection (this uses PDO which closes the connection in a different way than the MySQLi plugin thing.)
        $conn=null;

    }

    function insertComputer($value){
        //get the connection
        $conn = get_Connection();
        //setup all the variables needed to insert. Make sure the strings are wrapped in quotes correctly.
        $cond = $conn->quote($value->getCondition());
        $name = $conn->quote($value->getName());
        $manuf = $conn->quote($value->getManufacturer());
        $price = $value->getPrice();
        $stock = $value->getStock();
        $ram = $conn->quote($value->getRam());
        $cpuManu = $conn->quote($value->getCPUManu());
        $gcard = $conn->quote($value->getGCard());

        
        try{
            //prepare the sql statement that needs to be run, insert the variables. at this point,
            //I don't need to specify which var is in which order, but I can do that later if needed.
            $sql = "INSERT INTO COMPUTER VALUES (DEFAULT, $cond, $name, $manuf, $price, $stock, $ram, $cpuManu, $gcard);";
            //use exec() because it doesn't return any data when I run this statement. 
            $conn->exec($sql);
        }catch(PDOException $e){
            //catch any errors.
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conn=null;
    }


    //generate random set of 10 items for each item type and insert them into the DB.
    function generateRandomItems(){        
        //in order to not create 5milion entries, run the createTables() function, which will drop the table if it already exists, then recreate it.
        createTables();
        for ($i = 0; $i < 10; $i++){
            //create new variables
            $myTV = new TV();
            $myComp = new Computer();

            //tell the new variables to randomize their parent vars, their constructor already randomizes their personal vars.
            $myTV->RandomizeParentVars();
            $myComp->RandomizeParentVars();

            //insert the tv object into the database.
            insertTv($myTV);       
            //insert the computer object into the database.
            insertComputer($myComp);
        }
    }   
?>