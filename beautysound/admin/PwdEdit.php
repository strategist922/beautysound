<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�û�����</title>
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
		echo("�����ڴ��û������������");
	}
	else  {
		$adm->AdminPwd = $_POST["pwd"];
		$adm->UpdatePassword($uid);
		$_SESSION["admin_id"]=$uid;
		$_SESSION["admin_pwd"]=$adm->AdminPwd;
		echo("<h2>��������ɹ���</h2>");
	} 
?>	
</body>
</html>