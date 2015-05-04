<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/HTML');
//I also ran into the issue of trying to use is_int() and found Rachelle Robinett's post very helpful
session_start();
$everythingOK = 1;

if(!isset($_GET['min-multiplicand']))
{
	$everythingOK = 0;
	echo 'There is not a min-multiplicand<br>';
}
if(!isset($_GET['max-multiplicand']))
{
	$everythingOK = 0;
	echo 'There is not a max-multiplicand<br>';
}
if(!isset($_GET['min-multiplier']))
{
	$everythingOK = 0;
	echo 'There is not a min-multiplier<br>';
}
if(!isset($_GET['max-multiplier']))
{
	$everythingOK = 0;
	echo 'There is not a min-multiplier<br>';
}

if($everythingOK == 1)
{
	$minMultiplicand = $_GET['min-multiplicand'];
	$maxMultiplicand = $_GET['max-multiplicand'];
	$minMultiplier = $_GET['min-multiplier'];
	$maxMultiplier = $_GET['max-multiplier'];



	if(!(is_numeric($minMultiplicand) and ($minMultiplicand== (int)$minMultiplicand)))
	{
		$everythingOK = 0;
		echo 'The min-multiplicand is not an integer<br>';
	}
	
	if(!(is_numeric($maxMultiplicand) and ($maxMultiplicand== (int)$maxMultiplicand)))
	{
		$everythingOK = 0;
		echo 'The maxMultiplicand is not an integer<br>';
	}

	if(!(is_numeric($minMultiplier) and ($minMultiplier== (int)$minMultiplier)))
	{
		$everythingOK = 0;
		echo 'The min-multiplier is not an integer<br>';
	}

	if(!(is_numeric($maxMultiplier) and ($maxMultiplier == (int)$maxMultiplier)))
	{
		$everythingOK = 0;
		echo 'The max-multiplier is not an integer<br>';
	}

	if($minMultiplicand < 0)
	{
		$everythingOK = 0;
		echo 'The min-multiplicand cannot be negative<br>';
	}

	if($maxMultiplicand < 0)
	{
		$everythingOK = 0;
		echo 'The max-multiplicand cannot be negative<br>';
	}

	if($minMultiplier < 0)
	{
		$everythingOK = 0;
		echo 'The min-multiplier cannot be negative<br>';
	}

	if($maxMultiplier < 0)
	{
		$everythingOK = 0;
		echo 'The max-multiplier cannot be negative<br>';
	}

	if($minMultiplicand > $maxMultiplicand)
	{
		$everythingOK = 0;
		echo "The min-multiplicand is larger than the max-multiplicand<br>";
	}

	if($minMultiplier > $maxMultiplier)
	{
		$everythingOK = 0;
		echo "The min-multiplier is larger than the max-multiplier<br>";
	}
}


if($everythingOK == 1)
{
	echo '<p> <table border = "1"> <tr> <td>';
	for($i = $minMultiplier; $i <= $maxMultiplier; $i++)
	{	
		echo '<td>' . $i;
	}

	for($k = $minMultiplicand; $k <= $maxMultiplicand; $k++)
	{
		echo '<tr><td>' . $k;
		for($j = $minMultiplier; $j <= $maxMultiplier; $j++)
		{
			echo '<td>' . ($k * $j);
		}
	}
}
?>