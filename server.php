<?php
define('DB_HOST','localhost');
define('DB_NAME','quickpost');
define('DB_USER','root');
define('DB_PASSWORD','');

$connect=mysql_connect(localhost,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(quickpost,$connect) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function register()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM signin_table where Username = '$_POST[Username]' AND Password = '$_POST[Password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['UserName']) AND !empty($row['Password']))
	{
		$_SESSION['UserName'] = $row['Password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['Sign In']))
{
	submit();

}


?>

