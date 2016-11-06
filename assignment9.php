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
	<script src="assets/js/assignment9.js"></script>

</head>

<body>
	<?php include("navbar.php"); ?>
		<div class="container">
			<div class="starter-template">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Form Validation</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-8">
							<form class="form-horizontal" id="jsValidation">
								<fieldset>
									<legend>JS Validation</legend>
									<div id="jsNumArea" class="form-group">
										<label for="jsNumField" class="col-lg-2 control-label">Number(1-100): </label>
										<div class="col-lg-10">
											<input id="jsNumField" type="text" class="form-control">
										</div>
									</div>
									<div id="jsRealArea" class="form-group">
										<label for="jsRealField" class="col-lg-2 control-label">Real (decimal value): </label>
										<div class="col-lg-10">
											<input id="jsRealField" type="text" class="form-control">
										</div>
									</div>
									<div id="jsAlphaArea" class="form-group">
										<label for="jsAlphaField" class="col-lg-2 control-label">Alpha (a-z A-Z): </label>
										<div class="col-lg-10">
											<input id="jsAlphaField" type="text" class="form-control">
										</div>
									</div>
									<div id="jsDateArea" class="form-group">
										<label for="jsDateField" class="col-lg-2 control-label">Date (##/##/##): </label>
										<div class="col-lg-10">
											<input id="jsDateField" type="text" class="form-control">
										</div>
									</div>
									<div id="jsAlphaNumArea" class="form-group">
										<label for="jsAlphaNumField" class="col-lg-2 control-label">Alpha Numeric(A-F, 0-9): </label>
										<div class="col-lg-10">
											<input id="jsAlphaNumField" type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-10 col-lg-offset-2">
										<button id="jsSubmit" type="button" onclick="validateJS();" class="btn btn-primary">Submit</button>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="col-md-8">
							<form class="form-horizontal" id="phpValidation">
								<fieldset>
									<legend>PHP Validation</legend>
									<div id="errorAlertBox" class="alert alert-dismissible alert-danger hidden"></div>
									<div id="successAlertBox" class="alert alert-dismissible alert-success hidden">
										The form has been successfully validated.
									</div>
									<div id="phpNumArea" class="form-group">
										<label for="phpNumField" class="col-lg-2 control-label">Number(1-100): </label>
										<div class="col-lg-10">
											<input id="phpNumField" name="phpNumField" type="text" class="form-control">
										</div>
									</div>
									<div id="phpRealArea" class="form-group">
										<label for="phpRealField" class="col-lg-2 control-label">Real (decimal value): </label>
										<div class="col-lg-10">
											<input id="phpRealField" name="phpRealField" type="text" class="form-control">
										</div>
									</div>
									<div id="phpAlphaArea" class="form-group">
										<label for="phpAlphaField" class="col-lg-2 control-label">Alpha (a-z A-Z): </label>
										<div class="col-lg-10">
											<input id="phpAlphaField" name="phpAlphaField" type="text" class="form-control">
										</div>
									</div>
									<div id="phpDateArea" class="form-group">
										<label for="phpDateField" class="col-lg-2 control-label">Date (##/##/##): </label>
										<div class="col-lg-10">
											<input id="phpDateField" name="phpDateField" type="text" class="form-control">
										</div>
									</div>
									<div id="phpAlphaNumArea" class="form-group">
										<label for="phpAlphaNumField" class="col-lg-2 control-label">Alpha Numeric(A-F, 0-9): </label>
										<div class="col-lg-10">
											<input id="phpAlphaNumField" name="phpAlphaNumField" type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-10 col-lg-offset-2">
										<button id="phpSubmit" name="phpSubmit" type="button" onclick="validatePHP();" class="btn btn-primary" value="phpSubmit">Submit</button>
									</div>
								</fieldset>
							</form>
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
		<script>
		</script>


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