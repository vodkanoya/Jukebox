<?php
class Constants {

	// register error messages

	public static $passwordsDoNotMatch = "Your passwords do not match.";
	public static $passwordNotAlphanumeric = "Your password can only contain numbers and letters.";
	public static $passwordCharacters = "Your password must be between 10 and 30 characters.";
	public static $emailInvalid = "Please enter a valid email.";
	public static $emailsDoNotMatch = "Your emails don't match.";
	public static $emailTaken = "This email is already in use.";
	public static $lastNameCharacters = "Your last name must be between 2 and 25 characters.";
	public static $firstNameCharacters = "Your first name must be between 2 and 25 characters.";
	public static $usernameCharacters = "Your username must be between 5 and 25 characters.";
	public static $usernameTaken = "This username already exists.";

	// login error messages

	public static $loginFailed = "Your username or password was incorrect.";

}
?>