<?PHP
	session_start();
	$_SESSION["UserName"]="";
	$_SESSION["UserPwd"]="";
	$_SESSION["UserFlag"]="";
?>
<Script Language="Javascript">
  parent.location.href="index.php"
</Script>
