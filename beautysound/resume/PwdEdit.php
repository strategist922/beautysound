<?PHP include('isUser.php'); ?>
<html>
<head>
<title>用户管理</title>
</head>
<body>
<?PHP 

	$uid=$_SESSION["UserName"];
	$orgpwd=$_POST["orgpwd"];
	$npwd=$_POST["pwd"];
	$per = new Person();
	$per->UserName=$uid;
	$per->UserPwd=$orgpwd;
	if(!$per->HaveUser())
		exit("不存在此用户名或密码错误！");
	$per->UserPwd=$npwd;
	$results = $per->GetPersonInfo($uid);
	if ($row = $results->fetch_row())  {
		$per->UpdatePassword($uid);
		$_SESSION["UserName"]=$uid;
		$_SESSION["UserPwd"]=$npwd;
		print "<h2>更改密码成功！</h2>";
	}
?>	
</body>
</html>