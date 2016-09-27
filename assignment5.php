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
    <?php include("assets/classes/db.php"); ?>
</head>

<body>

    <?php include("navbar.php"); ?>
        <div class="container">

            <div class="starter-template">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo "<table class='table table-striped table-hover'>";
                        echo "<tr><th>ID</th><th>Condition</th><th>Name</th><th>Manufacturer</th><th>Price</th><th>Stock</th><th>Screen Size</th><th>Resolution</th></tr>";


                        try {
                            $conn = get_Connection();
                            $stmt = $conn->prepare("SELECT * FROM TV"); 
                            //get the data from the table.
                            $stmt->execute();

                            // set the resulting array to associative
                            //Basically this just sets all the table results, to the appropriate vars in the PHP object.
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                                echo $v;
                            }
                        }
                        catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                        $conn = null;
                        echo "</table>";
                    ?>
                            <?php
                        //print out the start of the table
                        echo "<table class='table table-striped table-hover'>";
                        echo "<tr><th>ID</th><th>Condition</th><th>Name</th><th>Manufacturer</th><th>Price</th><th>Stock</th><th>Ram</th><th>CPU Manufacturer</th><th>Graphics Card</th></tr>";


                        try {
                            $conn = get_Connection();
                            $stmt = $conn->prepare("SELECT * FROM COMPUTER"); 
                            //get the data from the table.
                            $stmt->execute();

                            // set the resulting array to associative
                            //Basically this just sets all the table results, to the appropriate vars in the PHP object.
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                                echo $v;
                            }
                        }
                        catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                        $conn = null;
                        echo "</table>";
                    ?>
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