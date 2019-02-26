<?php

include_once "UserManager.php";

$email = $_POST['Email'];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$password = $_POST['pwd'];
$confirm_password = $_POST['confirm_pwd'];



$user = new User($email,$firstName,$lastName);

$userManager = new UserManager($user);

if ($userManager->createUserWithPassword($password))
{
	print "Success!";
}
else
{
	print "Fail!";
}

?>