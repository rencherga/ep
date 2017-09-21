<?php 

include("functions.php");

error_reporting(E_ERROR | E_WARNING);

$un  = $_POST["un"];
$pw  = $_POST["pw"];

/*
DB dependencies
tbl_session
tbl_user
tbl_event_log
*/

if (strlen($un) > 0 && strlen($pw) > 0)
{
	echo "<HTML>";
	$pass_hash = encrypt_decrypt("encrypt", $pw);
	$sql = "SELECT COUNT(*) FROM tbl_user WHERE username = '" . $un . "' AND pass_hash = '" . $pass_hash . "'";
	$cnt = getData($sql);
	if ($cnt > 0)
	{
		////username and pass word are valid
		$sql = "UPDATE tbl_user set lastlogin = NOW() WHERE username = '" . $un . "'";
		getData($sql);
		$sql = "DELETE FROM tbl_session WHERE user = '" . $un . "'";
		getData($sql);
		$sess = getData("select uuid() from dual");
		$sql = "INSERT INTO tbl_session values ('" . $sess . "', '" . $un . "', NOW())";
		getData($sql);		
		if (!isset($_SESSION)) 
		{
			session_start();
		}
		$_SESSION["authuser"] = $un;
		$_SESSION["authsess"] = $sess;
		/////////////////////////log login
		$sql = "INSERT INTO tbl_event_log values (NOW(), 'successfully logged in " . $un . "', '" . $_SERVER['REMOTE_ADDR'] . "')";
		getData($sql);
		///////////////logged in now we send him or her to.....
		echo "<html><META http-equiv=\"refresh\" content=\"0;URL=index.php\"></html>";
	}
	else
	{
		///incorrect or invalid username or password
		$sql = "INSERT INTO tbl_event_log values (NOW(), 'bad username and pass " . $un . "', '" . $_SERVER['REMOTE_ADDR'] . "')";
		getData($sql);
		echo "<html><META http-equiv=\"refresh\" content=\"1;URL=login.php\">Invalid Login Credentials</html>";
	}
	
}
else
{
	/////////////////////
	//DUMP back to login page
	/////////////////////
	$sql = "INSERT INTO tbl_event_log values (NOW(), 'malformed request = " . $un . "', '" . $_SERVER['REMOTE_ADDR'] . "')";
	getData($sql);
	echo "<html><META http-equiv=\"refresh\" content=\"1;URL=http://www.bomjournal.com/apps/login.php\">Bad Credentials</html>";
}

?>
