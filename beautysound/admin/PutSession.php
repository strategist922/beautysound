<?PHP
	session_start();
	// 取输入的用户名和密码
	$UID=$_POST["loginname"];
	$PSWD=$_POST["password"];
	// 把用户名和密码放入Session
	$_SESSION["AdminId"]=$UID;
	$_SESSION["AdminPwd"]=$PSWD;
	header("Location: Index.php");
?>
