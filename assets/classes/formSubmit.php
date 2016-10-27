<?php 
    //Author: Adam Pine
    include_once("db.php");
    include_once("db_lib.php");
    

    //action to reset the tables.
    if(isset($_POST['method']) && $_POST['method'] == 'createTables')
    {
        createTables();
    }
    
    //action to insert 10 random items.
    if(isset($_POST['method']) && $_POST['method'] == 'randomizeData')
    {
        generateRandomItems();                                
    }

    //Action that gets called when inserting a computer.
    if(isset($_POST['method']) && $_POST['method'] == 'insertComputer')
    {
            /*Table structure:
            compCondition
            name
            manufacturer
            price - double
            stock - stock
            ram
            CpuManu
            GCard
            */
            $compCondition = " ";
            $name = " ";
            $manufacturer = " ";
            $price = 0.0;
            $stock = 0;
            $ram = " ";
            $CpuManu = " ";
            //check the variables to see if they are set, and if they are the right datatypes(when applicable)
            if (isset($_POST['compCondi'])){
                $compCondition = htmlentities($_POST['compCondi']);
            }
            if (isset($_POST['name'])){
                $name = htmlentities($_POST['name']);
            }
            if (isset($_POST['manuf'])){
                $manufacturer = htmlentities($_POST['manuf']);
            }
            if (isset($_POST['price']) && is_numeric($_POST['price'])){
                $price = (double)$_POST['price'];
            }
            if (isset($_POST['stock']) && is_numeric($_POST['stock'])){
                $stock = (int)$_POST['stock'];
            }
            if (isset($_POST['ram'])){
                $ram = htmlentities($_POST['ram']);
            }
            if (isset($_POST['cpuManuf'])){
                $CpuManu = htmlentities($_POST['cpuManuf']);
            }
            if (isset($_POST['gcard'])){
                $GCard = htmlentities($_POST['gcard']);
            }
            //create a new computer, and set the vars to the values from the form.
            $myComp = new Computer();
            $myComp->setCondition($compCondition);
            $myComp->setName($name);
            $myComp->setManufacturer($manufacturer);
            $myComp->setPrice($price);
            $myComp->setStock($stock);
            $myComp->setRam($ram);
            $myComp->setCPUManu($CpuManu);
            $myComp->setGCard($GCard);
            //call the insert comp function.
            insertComputer($myComp);          
    }



//Action that happens when you want to update a computer. comments are the same as above really, it does the same stuff
 if(isset($_POST['method']) && $_POST['method'] == 'updateComputer')
    {
            /*Table structure:
            compCondition
            name
            manufacturer
            price - double
            stock - stock
            ram
            CpuManu
            GCard
            */
            $compId = 0;
            $compCondition = " ";
            $name = " ";
            $manufacturer = " ";
            $price = 0.0;
            $stock = 0;
            $ram = " ";
            $CpuManu = " ";
            if (isset($_POST['compId']) && is_numeric($_POST['compId']) && $_POST['compId'] > 0){
                $compId = (int)$_POST['compId'];
            }
            if (isset($_POST['compCondi'])){
                $compCondition = htmlentities($_POST['compCondi']);
            }
            if (isset($_POST['name'])){
                $name = htmlentities($_POST['name']);
            }
            if (isset($_POST['manuf'])){
                $manufacturer = htmlentities($_POST['manuf']);
            }
            if (isset($_POST['price']) && is_numeric($_POST['price'])){
                $price = (double)$_POST['price'];
            }
            if (isset($_POST['stock']) && is_numeric($_POST['stock'])){
                $stock = (int)$_POST['stock'];
            }
            if (isset($_POST['ram'])){
                $ram = htmlentities($_POST['ram']);
            }
            if (isset($_POST['cpuManuf'])){
                $CpuManu = htmlentities($_POST['cpuManuf']);
            }
            if (isset($_POST['gcard'])){
                $GCard = htmlentities($_POST['gcard']);
            }
            $myComp = new Computer();
            $myComp->compId = $compId;
            $myComp->setCondition($compCondition);
            $myComp->setName($name);
            $myComp->setManufacturer($manufacturer);
            $myComp->setPrice($price);
            $myComp->setStock($stock);
            $myComp->setRam($ram);
            $myComp->setCPUManu($CpuManu);
            $myComp->setGCard($GCard);
            
            //call the update comp function.
            updateComputer($myComp);            
    }


//The Action that occurs when the post request wants to insert a tv.
    if(isset($_POST['method']) && $_POST['method'] == 'insertTV')
    {
            /*Table structure:
            Condition
            name
            manufacturer
            price - double
            stock - stock
            screenSize
            resolution
            */
            $condition = "";
            $name = "";
            $manufacturer = "";
            $price = 0.0;
            $stock = 0;
            $reso = "";
          
            if (isset($_POST['condi'])){
                $condition = htmlentities($_POST['condi']);
            }
            if (isset($_POST['name'])){
                $name = htmlentities($_POST['name']);
            }
            if (isset($_POST['manuf'])){
                $manufacturer = htmlentities($_POST['manuf']);
            }
            if (isset($_POST['price']) && is_numeric($_POST['price'])){
                $price = (double)$_POST['price'];
            }
            if (isset($_POST['stock']) && is_numeric($_POST['stock'])){
                $stock = (int)$_POST['stock'];
            }
            if (isset($_POST['reso'])){
                $reso = htmlentities($_POST['reso']);
            }
            if (isset($_POST['screenSize'])){
                $screenSize = htmlentities($_POST['screenSize']);
            }
            $myTV = new TV();
            $myTV->setCondition($condition);
            $myTV->setName($name);
            $myTV->setManufacturer($manufacturer);
            $myTV->setPrice($price);
            $myTV->setStock($stock);
            $myTV->setResolution($reso);
            $myTV->setScreenSize($screenSize);
            
            insertTV($myTV);
    }

/* UPDATE TV FORM SUBMIT */

    if(isset($_POST['method']) && $_POST['method'] == 'updateTV')
    {
            /*Table structure:
            Condition
            name
            manufacturer
            price - double
            stock - stock
            screenSize
            resolution
            */
            $id = "";
            $condition = "";
            $name = "";
            $manufacturer = "";
            $price = 0.0;
            $stock = 0;
            $reso = "";
          
            if (isset($_POST['tvId']) && is_numeric($_POST['tvId']) && (int)$_POST['tvId'] > 0){
                $id = (int)$_POST['tvId'];
            }
            if (isset($_POST['condi'])){
                $condition = htmlentities($_POST['condi']);
            }
            if (isset($_POST['name'])){
                $name = htmlentities($_POST['name']);
            }
            if (isset($_POST['manuf'])){
                $manufacturer = htmlentities($_POST['manuf']);
            }
            if (isset($_POST['price']) && is_numeric($_POST['price'])){
                $price = (double)$_POST['price'];
            }
            if (isset($_POST['stock']) && is_numeric($_POST['stock'])){
                $stock = (int)$_POST['stock'];
            }
            if (isset($_POST['reso'])){
                $reso = htmlentities($_POST['reso']);
            }
            if (isset($_POST['screenSize'])){
                $screenSize = htmlentities($_POST['screenSize']);
            }
            $myTV = new TV();
            $myTV->TVId = $id;
            $myTV->setCondition($condition);
            $myTV->setName($name);
            $myTV->setManufacturer($manufacturer);
            $myTV->setPrice($price);
            $myTV->setStock($stock);
            $myTV->setResolution($reso);
            $myTV->setScreenSize($screenSize);
            
            updateTV($myTV);
    }
    //this is the thing that populates the fields with correct values, when you change the dropdown.
    if(isset($_GET['compId']))
    {
        //get the connection
        $conn = get_Connection();
        //prepare the sql statement.
        $id = (int)$_GET['compId'];
        $stmt = $conn->prepare("SELECT * FROM COMPUTER WHERE compId=$id;"); 
        //execute the prepared statement
        $stmt->execute();
        //fetch all the results from that query, as an array, associated by name of cols, to their values
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //encode this array, as a JSON object.
        $json=json_encode($result);
        //returns the json data to the requester.
        echo $json;
    }
    //this is the thing that populates the field with correct values, when you change the dropdown.
    if(isset($_GET['tvId']))
    {
        //get the connection
        $conn = get_Connection();
        //prepare the sql statement.
        $id = (int)$_GET['tvId'];
        $stmt = $conn->prepare("SELECT * FROM TV WHERE tvId=$id;"); 
        //execute the prepared statement
        $stmt->execute();
        //fetch all the results from that query, as an array, associated by name of cols, to their values
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //encode this array, as a JSON object.
        $json=json_encode($result);
        //Returns the json data to the requester.
        echo $json;
    }
