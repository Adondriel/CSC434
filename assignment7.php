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
            <div class="container">
                <div class="starter-template">
        <?php 
            $mysqli = get_MySQLi_Connection();
            if (login_check($mysqli) == true) : ?>


                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Logout: </h3>
                        </div>
                        <div class="panel-body">
                            <li><a href="assets/classes/logout.php">Logout</a></li>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome: <?php echo $_SESSION['username']; ?> </h3>
                        </div>
                        <div class="panel-body">
                            <p>Database Info: </p>
                            <?php 
                                $user_id = $_SESSION['user_id'];
                                $login_string = $_SESSION['login_string'];
                                $username = $_SESSION['username'];
                                $last_login_time = $_SESSION['lastLoginTime'];
        
                                // Get the user-agent string of the user.
                                $user_browser = $_SERVER['HTTP_USER_AGENT'];
                                //check if their last login time is greater than 30 * 60 seconds. (30 mins)
                                if (time()-$last_login_time < 30*60){
                                    //if, to prepare the statement, and make sure the statement is not null.
                                    if ($stmt = $mysqli->prepare("SELECT id, username, email, password  
                                                                    FROM members 
                                                                    WHERE id = ? LIMIT 1")) {
                                        // Bind "$user_id" to parameter. 
                                        $stmt->bind_param('i', $user_id);
                                        $stmt->execute();   // Execute the prepared query.
                                        $stmt->store_result();
                                        //bind the results the the diff variables so that we can print them out below.
                                        $stmt->bind_result($id, $username, $email, $password);
                                        $stmt->fetch();
                                        //echo $id . "\n";
                                        //echo $username . "\n";
                                        //echo $email . "\n";
                                        //echo $password . "\n";                                        
                                    }
                                }  
                            ?>
                            
                            <p>ID: <?php echo $id; ?>  </p>
                            <p>Username: <?php echo $username; ?>  </p>
                            <p>Email: <?php echo $email; ?>  </p>
                            <p>Password(hashed): <?php echo $password; ?>  </p>

                        </div>
                    </div>


                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                            Assignment 7 source code:
                        </h3>
                        </div>
                        <div class="panel-body">
                            <h1>Click this link to visit the Github Directory for this assignment:  <a href="https://github.com/Adondriel/CSC434">https://github.com/Adondriel/CSC434</a></h1>
                            <h3>Files Used, find in github, or find them below:</h3>
                            <ul>
                                <li>assignment7.php</li>
                                <li>assets/classes/functions.php</li>
                                <li>assets/classes/logout.php</li>
                                <li>assets/classes/db.php</li>
                                <li>assets/classes/process_login.php</li>
                                <li><a href="assets/js/sha512.js">assets/js/sha512.js</a></li>
                                <li><a href="assets/js/forms.js">assets/js/forms.js</a></li>
                            </ul>
                            <div style="text-align:left;">
                                <p>
                                    <?php 
                                    echo("<h1>**************************** <br /> assignment7.php: <br /> ****************************</h1><br />");
                                    show_source('assignment7.php'); 
                                ?>
                                </p>
                                <p>
                                    <?php 
                                    echo("<h1>**************************** <br /> functions.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/functions.php'); 
                                ?>
                                </p>
                                <p>
                                    <?php 
                                    echo("<h1>**************************** <br /> logout.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/logout.php'); 
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
                                    echo("<h1>**************************** <br /> process_login.php <br /> ****************************</h1><br />");
                                    show_source('assets/classes/process_login.php'); 
                                ?>
                                </p>

                            </div>
                        </div>
                    </div>



                <p>Return to <a href="login.php">login page</a></p>
            <?php else : ?>
                <p>
                    <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
                </p>
            <?php endif; ?>
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
