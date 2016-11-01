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
    <script type="application/javascript">
        //this is an object.
        var exampleData = {
                //this is a string
                "name": "bob",
                //this is an int
                "age": 22,
                //this is a double.
                "paycheck": 22.50,
                //this is an array.
                "itemsInWallet": [
                    "Credit Card",
                    "Cash",
                    "ID"
                ]
            }
            //function to set the paycheck value.
        function setDataPaycheck(val) {
            exampleData.paycheck = val;
        }
        //function to print out the data. contains the for loop.
        function printData() {
            document.write("Name: " + exampleData.name + "<br>");
            document.write("Age: " + exampleData.age + "<br>");
            document.write("Paycheck: " + exampleData.paycheck + "<br>");
            document.write("Items In Wallet: <br>");
            for (var i = 0; i < exampleData.itemsInWallet.length; i++) {
                document.write(exampleData.itemsInWallet[i] + "<br>");
            }
        }
    </script>
    <?php include("navbar.php"); ?>
        <div class="container">
            <div class="starter-template">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Example 1</h3>
                    </div>
                    <div class="panel-body">
                        <p>This shows the example for using a for loop, as well as using a function.</p>
                        <p>
                            <script>
                                document.write("Before: <br>");
                                //printData function has the for loop inside of it.
                                printData();

                                setDataPaycheck(1.50);

                                document.write("<br><br>After: <br>");
                                printData();

                            </script>
                        </p>
                        <textarea readonly='true' style='width:100%;height:500px;'>
                            <script type="application/javascript">
                                var exampleData = {
                                    "name": "bob",
                                    "age": 22,
                                    "paycheck": 22.50,
                                    "itemsInWallet": [
                                        "Credit Card",
                                        "Cash",
                                        "ID"
                                    ]
                                }

                                function setDataPaycheck(val) {
                                    exampleData.paycheck = val;
                                }

                                function printData() {
                                    document.write("Name: " + exampleData.name + "<br>");
                                    document.write("Age: " + exampleData.age + "<br>");
                                    document.write("Paycheck: " + exampleData.paycheck + "<br>");
                                    document.write("Items In Wallet: <br>");
                                    for (var i = 0; i < exampleData.itemsInWallet.length; i++) {
                                        document.write(exampleData.itemsInWallet[i] + "<br>");
                                    }
                                }

                            </script>
                        </textarea>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Example 2</h3>
                    </div>
                    <div class="panel-body">
                        <p>This example will show an example of a while loop</p>
                        <p>
                            <script type="application/javascript">
                                var text = "";
                                var i = 0;
                                while (i < 10) {
                                    text += "<br>The number is " + i;
                                    i++;
                                }
                                document.write(text);

                            </script>
                        </p>
                        <textarea readonly='true' style='width:100%;height:500px;'>
                            <script type="application/javascript">
                                var text = "";
                                var i = 0;
                                while (i < 10) {
                                    text += "<br>The number is " + i;
                                    i++;
                                }
                                document.write(text);

                            </script>
                        </textarea>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Example 3</h3>
                    </div>
                    <div class="panel-body">
                        <p>This example will show the use of a case statement. and if statement.</p>
                        <script>
                            var day = "";
                            switch (new Date().getDay()) {
                                case 0:
                                    day = "Sunday";
                                    break;
                                case 1:
                                    day = "Monday";
                                    break;
                                case 2:
                                    day = "Tuesday";
                                    break;
                                case 3:
                                    day = "Wednesday";
                                    break;
                                case 4:
                                    day = "Thursday";
                                    break;
                                case 5:
                                    day = "Friday";
                                    break;
                                case 6:
                                    day = "Saturday";
                            }
                            document.write("<br> Today is: " + day);
                            document.write("<br><br> Is it Tuesday?<br>");
                            if (day === "Tuesday") {
                                document.write("Yes, It is tuesday!");
                            } else {
                                document.write("No, it is not tuesday!");
                            }
                        </script>
                        <textarea readonly='true' style='width:100%;height:500px;'>
                        <script>
                            var day = "";
                            switch (new Date().getDay()) {
                                case 0:
                                    day = "Sunday";
                                    break;
                                case 1:
                                    day = "Monday";
                                    break;
                                case 2:
                                    day = "Tuesday";
                                    break;
                                case 3:
                                    day = "Wednesday";
                                    break;
                                case 4:
                                    day = "Thursday";
                                    break;
                                case 5:
                                    day = "Friday";
                                    break;
                                case 6:
                                    day = "Saturday";
                            }
                            document.write("<br> Today is: " + day);
                            document.write("<br><br> Is it Tuesday?<br>");
                            if (day === "Tuesday") {
                                document.write("Yes, It is tuesday!");
                            } else {
                                document.write("No, it is not tuesday!");
                            }
                        </script>
                        </textarea>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Assignment 8 source code:
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>Click this link to visit the Github Directory for this assignment:  <a href="https://github.com/Adondriel/CSC434">https://github.com/Adondriel/CSC434</a></h1>
                        <h3>Files Used, find in github, or find them below:</h3>
                        <ul>
                            <li>assignment8.php</li>
                            
                        </ul>
                        <div style="text-align:left;">
                            <p>
                                <?php 
                                    echo("<h1>**************************** <br /> assignment8.php: <br /> ****************************</h1><br />");
                                    show_source('assignment8.php'); 
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
