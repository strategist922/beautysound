<?PHP
	include('..\Class\Admin.php');  
	session_start();
	$adm = new Admin();	// ����Admin����
	//��Session�����ж�ȡ�û���Ϣ
	$AdminId=trim($_SESSION["AdminId"]);
	$AdminPwd=trim($_SESSION["AdminPwd"]);
	//�û����Ƿ�Ϊ��
	if ($AdminId!="")  {
		$adm->AdminId=$AdminId;
		$adm->AdminPwd=$AdminPwd;
		//�ж��Ƿ���ڴ��û���Ϣ
		if(!$adm->GetAdmin())
			header("Location: Login.php"); 
	} 
	else  {
		header("Location: Login.php");
	}
?>
