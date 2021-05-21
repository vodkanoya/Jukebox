<?php

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText); 
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText); 
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText)); 
	return $inputText;
}

if(isset($_POST['registerButton'])) {
	//register button was pressed
	$username = sanitizeFormUsername($_POST['regUsername']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$emailConfirm = sanitizeFormString($_POST['emailConfirm']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);
	
	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $emailConfirm, $password, $password2);

	if ($wasSuccessful == true) {
		header("Location: index.php"); // re-directs the user to the index if registration is successful 
	}
}
?>