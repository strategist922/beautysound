<?PHP include('isTutor.php'); ?>
<html>
<head>
<title>�û�����</title>
</head>
<body>
<?PHP 

	$uid=$_SESSION["UserName"];
	$orgpwd=$_POST["orgpwd"];
	$npwd=$_POST["pwd"];
	$per = new Tutor();
	$per->RealName=$uid;
	$per->Pwd=$orgpwd;
	if(!$per->HaveUser())
		exit("�����ڴ��û������������");
	$per->Pwd=$npwd;
	$results = $per->GetPersonInfo($uid);
	if ($row = $results->fetch_row())  {
		$per->UpdatePassword($uid);
		$_SESSION["UserName"]=$uid;
		$_SESSION["UserPwd"]=$npwd;
		print "<h2>��������ɹ���</h2>";
	}
?>	
</body>
</html>