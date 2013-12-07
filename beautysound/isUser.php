<?PHP
	session_start();
	//如果是用户则显示
	$UName=trim($_SESSION["UserName"]);
	$UPwd=trim($_SESSION["UserPwd"]);
	include('class/Person.php');
	$per = New Person();
	//用户名是否为空
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
