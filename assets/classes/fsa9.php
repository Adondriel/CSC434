<?php
//Author: Adam Pine
//fsa9 = formSubmitAssignment9
if(isset($_POST['phpNumField'])){
        $numField = 0;
		$realField = 0;
		$alphaField = "";
		$dateField = "";
		$alphaNumField = "";
		
		$error = false;
		$errorMsg = array();
		
		if (isset($_POST['phpNumField']) && is_numeric($_POST['phpNumField'])){
			$numField = (double)$_POST['phpNumField'];
		}else{
			$errorMsg[] = "Number field was empty";
		}
	
		if (isset($_POST['phpRealField']) && is_numeric($_POST['phpRealField'])){
			$realField = (double)$_POST['phpRealField'];
		}else {
			$errorMsg[] = "Real field was empty";
		}
	
		if (isset($_POST['phpAlphaField'])){
			$alphaField = $_POST['phpAlphaField'];
		}else{
			$errorMsg[] = "Alpha field was empty";
		}
	
		if (isset($_POST['phpDateField'])){
			$dateField = $_POST['phpDateField'];
		}else {
			$errorMsg[] = "Date field was empty";
		}
	
		if (isset($_POST['phpAlphaNumField'])){
			$alphaNumField = $_POST['phpAlphaNumField'];
		}else{
			$errorMsg[] = "Alpha Numeric field was empty";
		}
	
	
	
	
		if (fmod($numField, 1) != 0 || $numField < 1 || $numField > 100){
			$errorMsg[] = "There was an issue with the Number field.";
		}
		if (fmod($realField, 1) == 0){
			$errorMsg[] = "There was an issue with the Real field." . $realField % 1.0;
		}
		if (!preg_match('/^[a-zA-Z]+$/', $alphaField)){
			$errorMsg[] = "There was an issue with the Alpha field." . $alphaField;
		}
		$errorMsg[]= substr_count($dateField, "/");
		if (substr_count($dateField, "/") > 2 || !preg_match('/[0-9]{1,2}\/[0-9]{2}\/[0-9]{2}/', $dateField)){
			$errorMsg[] = "There was an issue with the Date field.";
		}
		if (!preg_match('/^[A-F0-9]+$/', $alphaNumField)){
			$errorMsg[] = "There was an issue with the Alpha Numeric field.";
		}
	
		if(count($errorMsg) > 0){
			$error = true;
		}
	
		$result = array('error' => $error, 'errorMsg' => $errorMsg);
		echo json_encode($result);
	

//	echo '{ "error": ' . $error . ', "errorMsg": "' . $errorMsg . '"';		
	}
?>