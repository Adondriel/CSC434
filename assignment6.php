<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Assignment 5">
    <meta name="author" content="Adam Pine">
    <link rel="icon" href="favicon.ico">

    <title>HTML Examples Page</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/flatly_bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- FontAwesome Icon CDN include -->
    <script src="https://use.fontawesome.com/9b7180a9fe.js"></script>
    <?php require_once("assets/classes/db_lib.php"); ?>
</head>

<body>

    <?php include("navbar.php"); ?>
        <div class="container">
            <div class="starter-template">

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create Tables</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                            if(isset($_POST['method']) && $_POST['method'] == 'createTables')
                            {
                                createTables();
                                echo("<p>Tables created</p>");
                            }
                            if(isset($_POST['method']) && $_POST['method'] == 'randomizeData')
                            {
                                generateRandomItems();
                                echo("<p>Data randomized!</p>");
                            }
                        ?>
                            <form class="form-horizontal" name="formCreateTables" action="" method="post">
                                <fieldset>
                                    <legend>Create Tables</legend>
                                    <input type="text" name="method" value="createTables" hidden="true" />
                                    <div class="form-group">
                                        <div class="col-lg-3">
                                            <button type="submit" class="btn btn-primary">Create Tables</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <form class="form-horizontal" name="formRandomizeData" action="" method="post">
                                <fieldset>
                                    <legend>Insert 10 randomized items of each type</legend>
                                    <input type="text" name="method" value="randomizeData" hidden="true" />
                                    <div class="form-group">
                                        <div class="col-lg-3">
                                            <button type="submit" class="btn btn-primary">Randomize Data</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add data to tables</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form class="form-horizontal" name="insertComputer" action="" method="post">
                                <fieldset>
                                    <legend>Insert Computer</legend>
                                    <input type="text" name="method" value="insertComputer" hidden="true" />
                                    <div class="form-group">
                                        <label for="compCondi" class="col-lg-4 control-label">Computer Condition:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="compCondi" name="compCondi" placeholder="Used">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-lg-4 control-label">Item Name:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Computer">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="manuf" class="col-lg-4 control-label">Manufacturer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="manuf" name="manuf" placeholder="Lenovo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-lg-4 control-label">Price:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="price" name="price" placeholder="499.99">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock" class="col-lg-4 control-label">Stock:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="stock" name="stock" placeholder="50">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ram" class="col-lg-4 control-label">RAM:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="ram" name="ram" placeholder="16GB">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpuManuf" class="col-lg-4 control-label">CPU Manufacturer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="cpuManuf" name="cpuManuf" placeholder="Intel">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gcard" class="col-lg-4 control-label">Graphics Card:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="gcard" name="gcard" placeholder="GTX 1080">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12 col-lg-offset-4">
                                            <button type="submit" class="btn btn-primary">Insert new Computer</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <form class="form-horizontal" name="insertTV" action="" method="post">
                                <fieldset>
                                    <legend>Insert TV</legend>
                                    <input type="text" name="method" value="insertTV" hidden="true" />
                                    <div class="form-group">
                                        <label for="condi" class="col-lg-4 control-label">Computer Condition:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="condi" name="condi" placeholder="Used">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-lg-4 control-label">Item Name:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="TV">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="manuf" class="col-lg-4 control-label">Manufacturer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="manuf" name="manuf" placeholder="LG">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-lg-4 control-label">Price:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="price" name="price" placeholder="499.99">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock" class="col-lg-4 control-label">Stock:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="stock" name="stock" placeholder="50">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reso" class="col-lg-4 control-label">Resolution:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="reso" name="reso" placeholder="1920x1080">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="screenSize" class="col-lg-4 control-label">Screen Size:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="screenSize" name="screenSize" placeholder='40"'>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-lg-12 col-lg-offset-4 ">
                                            <button type="submit" class="btn btn-primary ">Insert new TV</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <?php
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
                                $GCard = " ";

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
                                $screenSize = "";

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
                        
                        ?>

                    </div>
                </div>

                <!--//end table panel -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Assignment 6 source code:
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>Click this link to visit the Github Directory for this assignment:  <a href="https://github.com/Adondriel/CSC434">https://github.com/Adondriel/CSC434</a></h1>
                        <h3>Files Used, find in github, or find them below:</h3>
                        <ul>
                            <li>assignment6.php</li>
                            <li>assets/classes/db_lib.php</li>
                            <li>assets/classes/db.php - (From what I can tell, my webhost's database is not accessable remotely, so this is semi-secure... still not very secure though.)</li>
                        </ul>
                        <div style="text-align:left;">
                            <p>
                                <?php 
                                    echo("<h1>**************************** <br /> db_lib.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/db_lib.php'); 
                                ?>
                            </p>
                            <p>
                                <?php 
                                    echo("<h1>**************************** <br /> db.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/db.php'); 
                                ?>
                            </p>
                            <p>
                                <?php 
                                    echo("<h1>**************************** <br /> assignment6.php: <br /> ****************************</h1><br />");
                                    show_source('assignment6.php'); 
                                ?>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /.container -->


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>