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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>
	<?php include("navbar.php"); ?>
		<div class="container">
			<div class="starter-template">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Example 1</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-8">
							<form class="form-horizontal">
								<fieldset>
									<legend>Legend</legend>
									<div id="jsNumArea" class="form-group">
										<label for="jsNumField" class="col-lg-2 control-label">Number: </label>
										<div class="col-lg-10">
											<input id="jsNumField" type="number" class="form-control">
										</div>
									</div>
									<div id="jsRealArea" class="form-group">
										<label for="jsRealField" class="col-lg-2 control-label">Real: </label>
										<div class="col-lg-10">
											<input id="jsRealField" type="text" class="form-control">
										</div>
									</div>
									<div id="jsAlphaArea" class="form-group">
										<label for="jsAlphaField" class="col-lg-2 control-label">Alpha: </label>
										<div class="col-lg-10">
											<input id="jsAlphaField" type="text" class="form-control">
										</div>
									</div>
									<div id="jsDateArea" class="form-group">
										<label for="jsDateField" class="col-lg-2 control-label">Date: </label>
										<div class="col-lg-10">
											<input id="jsDateField" type="date" class="form-control">
										</div>
									</div>
									<div id="jsAlphaNumArea" class="form-group">
										<label for="jsAlphaNumField" class="col-lg-2 control-label">Alpha Numeric: </label>
										<div class="col-lg-10">
											<input id="jsAlphaNumField" type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-10 col-lg-offset-2">
										<button id="jsSubmit" onclick="validateJS();" class="btn btn-primary">Submit</button>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="col-md-8">
						</div>
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