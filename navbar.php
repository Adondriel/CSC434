<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fullwidth">
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
					<li <?php if($currentPage=="html_examples.php" ){echo( "class='active'");} ?>><a href="html_examples.html">HTML Examples</a></li>
					<li <?php if($currentPage=="php_examples.php" ){echo( "class='active'");} ?>><a href="php_examples.php">PHP Examples</a></li>
					<li <?php if($currentPage=="assignment3.php" ){echo( "class='active'");} ?>><a href="assignment3.php">Assignment 3</a></li>
					<li <?php if($currentPage=="assignment4.php" ){echo( "class='active'");} ?>><a href="assignment4.php">Assignment 4</a></li>
					<li <?php if($currentPage=="assignment5.php" ){echo( "class='active'");} ?>><a href="assignment5.php">Assignment 5</a></li>
					<li <?php if($currentPage=="assignment6.php" ){echo( "class='active'");} ?>><a href="assignment6.php">Assignment 6</a></li>
					<li <?php if($currentPage=="assignment7.php" ){echo( "class='active'");} ?>><a href="assignment7.php">Assignment 7</a></li>
					<li <?php if($currentPage=="assignment8.php" ){echo( "class='active'");} ?>><a href="assignment8.php">Assignment 8</a></li>
					<li <?php if($currentPage=="assignment9.php" ){echo( "class='active'");} ?>><a href="assignment9.php">Assignment 9</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>