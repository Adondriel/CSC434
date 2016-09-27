<?php
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
            echo "Tables created successfully";
        }catch(PDOException $e){
            //catch any errors.
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;

    }

    function insertTv($value){
        $conn = get_Connection();
        $cond = $conn->quote($value->getCondition());
        $name = $conn->quote($value->getName());
        $manuf = $conn->quote($value->getManufacturer());
        $price = $value->getPrice();
        $stock = $value->getStock();
        $screenSize = $conn->quote($value->getScreenSize());
        $resolution = $conn->quote($value->getResolution());
        
        try{
            $sql = "INSERT INTO TV VALUES (DEFAULT, $cond, $name, $manuf, $price, $stock, $screenSize, $resolution);";
            $conn->exec($sql);
        }catch(PDOException $e){
            //catch any errors.
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn=null;

    }

    function insertComputer($value){
        $conn = get_Connection();
        $cond = $conn->quote($value->getCondition());
        $name = $conn->quote($value->getName());
        $manuf = $conn->quote($value->getManufacturer());
        $price = $value->getPrice();
        $stock = $value->getStock();
        $ram = $conn->quote($value->getRam());
        $cpuManu = $conn->quote($value->getCPUManu());
        $gcard = $conn->quote($value->getGCard());

        
        try{
            $sql = "INSERT INTO COMPUTER VALUES (DEFAULT, $cond, $name, $manuf, $price, $stock, $ram, $cpuManu, $gcard);";
            $conn->exec($sql);
        }catch(PDOException $e){
            //catch any errors.
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conn=null;
    }


    //generate random set of 10 items for each item type and insert them into the DB.
    function generateRandomItems(){
        $tvArray = array();
        $compArray = array();

        createTables();
        for ($i = 0; $i < 10; $i++){
            $myTV = new TV();
            $myComp = new Computer();

            $myTV->RandomizeParentVars();
            $myComp->RandomizeParentVars();

            //insertTv($myTV->getCondition(), $myTV->getName(), $myTV->getManufacturer(), $myTV->getPrice(), $myTV->getStock(), $myTV->getScreenSize(), $myTV->getResolution() );
            insertTv($myTV);
            
            //insertComp($myComp->getCondition(), $myComp->getName(), $myComp->getManufacturer(), $myComp->getPrice(), $myComp->getStock(), $myComp->getRam(), $myComp->getCPUManu(), $myComp->getGCard());
            insertComputer($myComp);
            $tvArray[] = $myTV;
            $compArray[] = $myComp;
        }
    }   
?>