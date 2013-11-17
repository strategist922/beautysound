<?PHP
	include('..\Class\Admin.php');  
	session_start();
	$adm = new Admin();	// 定义Admin对象
	//从Session变量中读取用户信息
	$AdminId=trim($_SESSION["AdminId"]);
	$AdminPwd=trim($_SESSION["AdminPwd"]);
	//用户名是否为空
	if ($AdminId!="")  {
		$adm->AdminId=$AdminId;
		$adm->AdminPwd=$AdminPwd;
		//判断是否存在此用户信息
		if(!$adm->GetAdmin())
			header("Location: Login.php"); 
	} 
	else  {
		header("Location: Login.php");
	}
?>
