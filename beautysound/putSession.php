<?PHP
	// 取输入的用户名和密码以及用户类别，0-个人；1-公司
	$UID=$_POST["loginname"];
	$PSWD=$_POST["password"];
	$Flag=$_POST["flag"];
	// 把用户名和密码放入Session
	session_start();
	$_SESSION["UserName"]=$UID;
	$_SESSION["UserPwd"]=$PSWD;
	$_SESSION["UserFlag"]=$Flag;
?>
<Script Language="Javascript">
  parent.location.href="index.php"
</Script>
