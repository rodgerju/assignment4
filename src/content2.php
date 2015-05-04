<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/HTML');

session_start();
if(!isset($_SESSION['test']))
{
	$_SESSION['test'] = 0;
}
if ($_SESSION['test'] != 0)
{
	echo 'Click 
	<a href=http://web.engr.oregonstate.edu/~rodgerju/cs290/assign4/content1.php> 
	here </a> to return to content1';
}

else
{
	echo 'Please login first.  Click 
	<a href=http://web.engr.oregonstate.edu/~rodgerju/cs290/assign4/login.php> 
	here </a> to login';
}
?>