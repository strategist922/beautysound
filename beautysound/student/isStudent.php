<?PHP
	session_start();
	//如果是用户则显示
	$UName=trim($_SESSION["UserName"]);
	$UPwd=trim($_SESSION["UserPwd"]);
	include('../class/Tutor.php');
	$tu = New Tutor();
	//用户名是否为空
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
