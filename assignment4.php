<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Assignment 4">
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
</head>

<body>

    <?php include("navbar.php"); ?>
        <div class="container">

            <div class="starter-template">
                <p>This page will read and print out the first 10 lines of the Assignment3.php file</p>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Printout of assignment3.php</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        //Read in the file
                        $myfile = fopen("assignment3.php", "r") or die("Unable to open file!");
                        //put the print out into a textarea.
                        echo("<textarea readonly='true' style='width:100%;height:500px;'>");
                        for ($i=0; $i<10; $i++) {
                            echo fgets($myfile);
                            //echo("\n");
                        }
                        //This keeps the formatting as well.
                        echo("</textarea>");
                        fclose($myfile);
                    ?>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            assignment4.php source code:
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>Click this link to visit the Github Directory for this assignment:  <a href="https://github.com/Adondriel/CSC434">https://github.com/Adondriel/CSC434</a></h1>
                        <h3>Files Used, find in github, or find them below:</h3>
                        <ul>
                            <li>assignment4.php</li>
                            <li>assignment3.php</li>
                        </ul>
                        <div style="text-align:left;">
                            <p>

                                <?php echo("Assignment 4: \n"); show_source('assignment4.php'); ?>
                            </p>
                            <p>
                                <?php echo("Assignment 3: \n"); show_source('assignment3.php'); ?>

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