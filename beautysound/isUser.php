<?PHP
	session_start();
	//������û�����ʾ
	$UName=trim($_SESSION["UserName"]);
	$UPwd=trim($_SESSION["UserPwd"]);
	include('class/Person.php');
	$per = New Person();
	//�û����Ƿ�Ϊ��
	if ($UName!="")  {
		$per->UserName=$UName;
		$per->UserPwd=$UPwd;
		if (!$per->HaveUser())  {
			header("Location:index.php");
		} 
	}
	else  {
		header("Location: index.php");
	} 
?>
