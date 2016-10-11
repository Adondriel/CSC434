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
        <?php require_once("assets/classes/formSubmit.php"); ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
                                        <label for="compCondi" class="col-lg-4 control-label">Condition:</label>
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
                                        <label for="condi" class="col-lg-4 control-label">Condition:</label>
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
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Data</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <select id="ComputerSelector">
                                <option value="-1">Please Select a Computer entry to update.</option>
                                <?php
                                //This will generate the Select options from the database results.
                                    try {
                                        //get the connection
                                        $conn = get_Connection();
                                        //prepare the sql statement.
                                        $stmt = $conn->prepare("SELECT * FROM COMPUTER;"); 
                                        //get the data from the table.
                                        $stmt->execute();
    
                                        // set the resulting array to associative
                                        //Basically this just sets all the table results, to the appropriate vars in the PHP object.
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        //TableRows are defined in db.php, they just help wrap the different values in <td>/<tr> determined by whether or not the row has children.
                                        foreach(new SelectOptionRow(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                                        //print out the table rows and the table data items.
                                            echo $v;
                                        }                                
                                    }
                                    catch(PDOException $e) {
                                        echo "Error: " . $e->getMessage();
                                    }
                                    $conn = null;
                                    ?>
                            </select>
                            <script type="text/javascript">
                                //This function will update the form fields, when the select box is changed.
                                //So that the user is truly updating the previous data, rather than having to reenter it again.
                                $(document).ready(function() {
                                    $('#ComputerSelector').change(function() {
                                        if ($('#ComputerSelector').val() !== "-1") {
                                            $.ajax({
                                                type: 'GET',
                                                url: 'assets/classes/formSubmit.php',
                                                data: 'compId=' + $('#ComputerSelector').val(), // comp id
                                                dataType: 'json',
                                                success: function(data) { // returns data
                                                    //populate the form fields with the data returned
                                                    $('#updateCompCondi').val(data[0].compCondition);
                                                    $('#updateCompName').val(data[0].name);
                                                    $('#updateCompManuf').val(data[0].manufacturer);
                                                    $('#updateCompPrice').val(data[0].price);
                                                    $('#updateCompStock').val(data[0].stock);
                                                    $('#updateCpuManuf').val(data[0].CpuManu);
                                                    $('#updateGCard').val(data[0].GCard);
                                                    $('#updateCompRam').val(data[0].Ram);
                                                    $('#hidCompId').val(data[0].compId);
                                                }
                                            });
                                        } else {
                                            //otherwise, clear the form out.
                                            $('#updateCompCondi').val("");
                                            $('#updateCompName').val("");
                                            $('#updateCompManuf').val("");
                                            $('#updateCompPrice').val("");
                                            $('#updateCompStock').val("");
                                            $('#updateCpuManuf').val("");
                                            $('#updateGCard').val("");
                                            $('#updateCompRam').val("");
                                            $('#hidCompId').val("-1");
                                        }
                                    });
                                });

                            </script>
                            <!--Form for updating a computer item-->
                            <form class="form-horizontal" name="updateComputer" action="" method="post">
                                <fieldset>
                                    <legend>Update Computer</legend>
                                    <input type="text" name="method" value="updateComputer" hidden="true" />
                                    <input type="text" id="hidCompId" name="compId" value="-1" hidden="true" />

                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Condition:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCompCondi" name="compCondi" placeholder="Used">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Item Name:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCompName" name="name" placeholder="Computer">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Manufacturer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCompManuf" name="manuf" placeholder="Lenovo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Price:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCompPrice" name="price" placeholder="499.99">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Stock:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCompStock" name="stock" placeholder="50">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">RAM:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCompRam" name="ram" placeholder="16GB">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">CPU Manufacturer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateCpuManuf" name="cpuManuf" placeholder="Intel">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Graphics Card:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateGCard" name="gcard" placeholder="GTX 1080">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12 col-lg-offset-4">
                                            <button type="submit" class="btn btn-primary">Update Computer</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="col-md-8">
                            <select id="tvSelector">
                                <option value="-1">Please Select a TV entry to update.</option>
                                <?php
                                try {
                                    //get the connection
                                    $conn = get_Connection();
                                    //prepare the sql statement.
                                    $stmt = $conn->prepare("SELECT * FROM TV;"); 
                                    //get the data from the table.
                                    $stmt->execute();

                                    // set the resulting array to associative
                                    //Basically this just sets all the table results, to the appropriate vars in the PHP object.
                                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                    //TableRows are defined in db.php, they just help wrap the different values in <td>/<tr> determined by whether or not the row has children.
                                    foreach(new SelectOptionRow(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                                    //print out the table rows and the table data items.
                                        echo $v;
                                    }                                
                                }
                                catch(PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                }
                                $conn = null;
                                ?>
                            </select>
                            <script type="text/javascript">
                                //This function will update the form fields, when the select box is changed.
                                //So that the user is truly updating the previous data, rather than having to reenter it again.
                                $(document).ready(function() {
                                    $('#tvSelector').change(function() {
                                        if ($('#tvSelector').val() !== "-1") {
                                            $.ajax({
                                                type: 'GET',
                                                url: 'assets/classes/formSubmit.php',
                                                data: 'tvId=' + $('#tvSelector').val(), // tvid
                                                dataType: 'json',
                                                success: function(data) { // returns data for givenID
                                                    //console.info(data);
                                                    $('#updateTVCondi').val(data[0].tvCondition);
                                                    $('#updateTVName').val(data[0].tvName);
                                                    $('#updateTVManuf').val(data[0].manufacturer);
                                                    $('#updateTVPrice').val(data[0].price);
                                                    $('#updateTVStock').val(data[0].stock);
                                                    $('#updateTVReso').val(data[0].resolution);
                                                    $('#updateTVScreenSize').val(data[0].screenSize);
                                                    $('#hidTVId').val(data[0].TVId);
                                                }
                                            });
                                        } else {
                                            $('#updateTVCondi').val("");
                                            $('#updateTVName').val("");
                                            $('#updateTVManuf').val("");
                                            $('#updateTVPrice').val("");
                                            $('#updateTVStock').val("");
                                            $('#updateTVReso').val("");
                                            $('#updateTVScreenSize').val("");
                                            $('#hidTVId').val("-1");
                                        }
                                    });
                                });

                            </script>
                            <form class="form-horizontal" name="updateTV" action="" method="post">
                                <fieldset>
                                    <legend>Update TV</legend>
                                    <input type="text" name="method" value="updateTV" hidden="true" />
                                    <input type="text" id="hidTVId" name="tvId" value="-1" hidden="true" />

                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Condition:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVCondi" name="condi" placeholder="Used">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Item Name:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVName" name="name" placeholder="TV">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Manufacturer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVManuf" name="manuf" placeholder="LG">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Price:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVPrice" name="price" placeholder="499.99">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Stock:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVStock" name="stock" placeholder="50">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Resolution:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVReso" name="reso" placeholder="1920x1080">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Screen Size:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="updateTVScreenSize" name="screenSize" placeholder='40"'>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-lg-12 col-lg-offset-4 ">
                                            <button type="submit" class="btn btn-primary ">Update TV</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
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
                            <li>assets/classes/formSubmit.php</li>
                            <li>assets/classes/db_lib.php</li>
                            <li>assets/classes/db.php - (From what I can tell, my webhost's database is not accessable remotely, so this is semi-secure... still not very secure though.)</li>
                            <li>assets/classes/amazon_lib.php</li>
                        </ul>
                        <div style="text-align:left;">
                            <p>
                                <?php 
                                    echo("<h1>**************************** <br /> assignment6.php: <br /> ****************************</h1><br />");
                                    show_source('assignment6.php'); 
                                ?>
                            </p>
                            <p>
                                <?php 
                                    echo("<h1>**************************** <br /> formSubmit.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/formSubmit.php'); 
                                ?>
                            </p>
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
                                    echo("<h1>**************************** <br /> amazon_lib.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/amazon_lib.php'); 
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
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')

        </script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
