<?php

if (isset($_POST["submit"])) 
{
	$fName = $_POST["fName"];
	$lName = $_POST["lName"];
	$email = $_POST["email"];
	$username = $_POST["userID"];
	$pass = $_POST["pass"];
	$passVerify = $_POST["passVerify"];

	require_once "dBconnect.inc.php";
	require_once 'functions.inc.php';

	if (emptyInputSignup($fName, $lName, $email, $username, $pass, $passVerify) !== false) 
	{
		header("location: ../signup.php?error=emptyinput");
			exit();
	}
		// Proper username chosen
	  if (invalidUid($userID) !== false) 
	  {
		header("location: ../signup.php?error=invaliduid");
			exit();
	  }
	  // Proper email chosen
	  if (invalidEmail($email) !== false) 
	  {
		header("location: ../signup.php?error=invalidemail");
			exit();
	  }
	  // Do the two passwords match?
	  if (pwdMatch($pass, $passVerify) !== false) 
	  {
		header("location: ../signup.php?error=passwordsdontmatch");
			exit();
	  }
	  // Is the username taken already
	  if (uidExists($conn, $username) !== false) 
	  {
		header("location: ../signup.php?error=usernametaken");
			exit();
	  }
	
	  // If we get to here, it means there are no user errors
	
	  // Now we insert the user into the database
	  createUser($conn, $fName, $lName, $email, $username, $pass);
	
} 
	
	else 
	{
		header("location: ../signup.php");
		exit();
	}


