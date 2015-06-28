<?php 
//echo "Trying to connect to server...<br />";
session_start();
$dbc = mysql_connect('216.172.184.74:3306',"ab8072_ahs",'ahs@2015');
if (!$dbc)
{
	die('Not connected : ' . mysql_error());
}
else
{
	//print "Connected to server!";
}
//select database
//echo "Trying to connect to database...<br />";
$db_selected = mysql_select_db("ab8072_ahs_db",$dbc);
if (!$db_selected)
{
	die("Can not connect : " . mysql_error());
}
else
{
	//print "Connected to database!";
}

?>