<?php 
    if(isset($_POST['method']) && $_POST['method'] == 'createTables')
    {
        createTables();
    }
    if(isset($_POST['method']) && $_POST['method'] == 'randomizeData')
    {
        generateRandomItems();                                
    }

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
            $myComp->setCondition($compCondition);
            $myComp->setName($name);
            $myComp->setManufacturer($manufacturer);
            $myComp->setPrice($price);
            $myComp->setStock($stock);
            $myComp->setRam($ram);
            $myComp->setCPUManu($CpuManu);
            $myComp->setGCard($GCard);
            
            insertComputer($myComp);
            
            //echo("<p>Inserted Computer</p>"); 
    }
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
                $resolutiion = htmlentities($_POST['reso']);
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
            
            //echo("<p>Inserted TV</p>"); 
    }