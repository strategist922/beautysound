<?PHP
	session_start();
	//������û�����ʾ
	$UName=trim($_SESSION["UserName"]);
	$UPwd=trim($_SESSION["UserPwd"]);
	include('../class/Tutor.php');
	$tu = New Tutor();
	//�û����Ƿ�Ϊ��
	if ($UName!="")  {
		$tu->RealName=$UName;
		$tu->Pwd=$UPwd;
		if (!$tu->HaveUser())  {
			header("Location: ../index.php");
		} 
	}
	else  {
		header("Location: ../index.php");
	} 
?>
