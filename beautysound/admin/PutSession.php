<?PHP
	session_start();
	// ȡ������û���������
	$UID=$_POST["loginname"];
	$PSWD=$_POST["password"];
	// ���û������������Session
	$_SESSION["AdminId"]=$UID;
	$_SESSION["AdminPwd"]=$PSWD;
	header("Location: Index.php");
?>
