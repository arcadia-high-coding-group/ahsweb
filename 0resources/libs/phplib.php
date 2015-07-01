<?php
//require('config.php');

function isLoggedIn()
{
	//check if logged in
	if(isset($_SESSION['user_id']))
	{
		$result = mysql_query("SELECT * FROM `users` WHERE `id`='".$_SESSION['user_id']."'");
		if($result)
		{
			if(mysql_num_rows($result) > 0)
			{
				return true;
			}
		}
	}
	else
	{
		return false;
	}
	
	return false;
}

?>