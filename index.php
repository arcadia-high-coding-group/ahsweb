<?php 
require("config.php"); 

$sql = "SELECT * FROM users";

$result = mysql_query($sql);

if($result)
while($info = mysql_fetch_array($result))
{
	echo "{$info['username']}<br />";
}
else
	echo "query failed: ".$sql;

?>

<html>

<body>
	<h1>Header</h1>
	
	<p>New sdfsdf paragraph</p>
	
	<p>New paragraph 2</p>
</body>

</html>