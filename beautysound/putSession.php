<?PHP
	// ȡ������û����������Լ��û����0-���ˣ�1-��˾
	$UID=$_POST["loginname"];
	$PSWD=$_POST["password"];
	$Flag=$_POST["flag"];
	// ���û������������Session
	session_start();
	$_SESSION["UserName"]=$UID;
	$_SESSION["UserPwd"]=$PSWD;
	$_SESSION["UserFlag"]=$Flag;
?>
<Script Language="Javascript">
  parent.location.href="index.php"
</Script>
