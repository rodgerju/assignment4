<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/HTML');

session_start();

if(!($_GET == null))
{
	$aGetJSONstring = array(
		'Type' => 'GET'
	);

	$aGetJSONstring['Parameters'] = $_GET;

	echo json_encode($aGetJSONstring);
}
else if (!($_POST == null))
{
	$aGetJSONstring = array(
		'Type' => 'POST'
	);

	$aGetJSONstring['Parameters'] = $_POST;

	echo json_encode($aGetJSONstring);
}
?>