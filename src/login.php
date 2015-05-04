<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/HTML');

session_start();
if(!isset($_SESSION['test']))
{
	$_SESSION['test'] = 0;
}
if($_SESSION == 1)
{
	header("Location: http://web.engr.oregonstate.edu/~rodgerju/cs290/assign4/content1.php");
}
echo '<form action="http://web.engr.oregonstate.edu/~rodgerju/cs290/assign4/content1.php" method="post">
	  <p> Username: <input type="text" name="username">
	  <input type="submit"> </table> </form>';
?>