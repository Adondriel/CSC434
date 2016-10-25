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
    <?php
        include_once("assets/classes/db.php");
        include_once("assets/classes/functions.php"); 
    
        sec_session_start();
    ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>

    <?php include("navbar.php"); ?>

        <?php if (login_check(get_MySQLi_Connection()) == true) : ?>

            <div class="container">
                <div class="starter-template">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Tables</h3>
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>



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
            <p>Return to <a href="index.php">login page</a></p>
            <?php else : ?>
                <p>
                    <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
                </p>
                <?php endif; ?>



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
