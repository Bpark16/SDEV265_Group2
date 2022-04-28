<?php

$serverName = "sstenticlesserver.database.windows.net";
$dBUsername = "SSAdmin55";
$dBPassword = "Stay_100_Allday";
$dBname = "SSTenticlesDB";

$conn = mysqli_connect($serverName, $dBUsername, $$dBPassword, $dBName);

if (!$conn) 
{
	die("Connection Failed: " . mysqlu_connect_error());
}