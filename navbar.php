<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CSC434</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li <?php if($currentPage=="html_examples.php" ){echo( "class='active'");} ?>><a href="html_examples.html"><i class="fa fa-code" aria-hidden="true"></i> HTML Examples</a></li>
                    <li <?php if($currentPage=="php_examples.php" ){echo( "class='active'");} ?>><a href="php_examples.php"><i class="fa fa-code" aria-hidden="true"></i> PHP Examples</a></li>
                    <li <?php if($currentPage=="assignment3.php" ){echo( "class='active'");} ?>><a href="assignment3.php"><i class="fa fa-code" aria-hidden="true"></i> Assignment 3</a></li>
                    <li <?php if($currentPage=="assignment4.php" ){echo( "class='active'");} ?>><a href="assignment4.php"><i class="fa fa-code" aria-hidden="true"></i> Assignment 4</a></li>
                    <li <?php if($currentPage=="assignment5.php" ){echo( "class='active'");} ?>><a href="assignment5.php"><i class="fa fa-code" aria-hidden="true"></i> Assignment 5</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>