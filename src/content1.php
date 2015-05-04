<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/HTML');

session_start();
if(!isset($_SESSION['test']))
{
	$_SESSION['test'] = 0;
}
if (($_POST != null && $_POST['username'] != '')  || ($_SESSION['test'] != 0))
{
	$_SESSION['test'] = 1;
	if(!isset($_SESSION['username'])) {
		$_SESSION['username'] = $_POST['username'];
	}

	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = -1;
	}

	$_SESSION['visits']++;
	echo "Hi $_SESSION[username], you have visited this page $_SESSION[visits] times. <br>";
	echo 'Click 
	<a href=http://web.engr.oregonstate.edu/~rodgerju/cs290/assign4/content2.php> 
	here </a> to go to content2';
}

else
{
	echo 'Please enter a username.  Click 
	<a href=http://web.engr.oregonstate.edu/~rodgerju/cs290/assign4/login.php> 
	here </a> to return';
}
?>