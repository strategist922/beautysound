<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理</title>
</head>
<body>
<?PHP 
	session_start();
	$uid=$_GET["aid"];
	$orgpwd=$_POST["orgpwd"];
	include('..\Class\Admin.php');
	$adm = new Admin();
	$adm->AdminID = $uid;
	$adm->AdminPwd = $orgpwd;
	$exist = $adm->GetAdmin();
	if (!$exist)  {
		echo("不存在此用户名或密码错误！");
	}
	else  {
		$adm->AdminPwd = $_POST["pwd"];
		$adm->UpdatePassword($uid);
		$_SESSION["admin_id"]=$uid;
		$_SESSION["admin_pwd"]=$adm->AdminPwd;
		echo("<h2>更改密码成功！</h2>");
	} 
?>	
</body>
</html>