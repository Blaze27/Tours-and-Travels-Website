
<?php
define('DB_SERVER','localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'iwp_project');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno())
{
	echo "Failed to connect to sql: " . mysqli_connect_error();
}
?>