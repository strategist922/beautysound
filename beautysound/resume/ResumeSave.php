<html>
<head>
<title>注册保存</title>
</head>
<body>
<?PHP
	include('../class/Person.php');
	//得到动作参数，如果为add则表示添加操作，如果为update则表示更改操作
	$StrAction=$_GET["action"];
	$per = new Person();
	$per->UserName=$_POST["username"];
	$per->UserPwd=$_POST["pwd"];
	$per->RealName=$_POST["realname"];
	$per->Sex=$_POST["sex"];
	$per->Email=$_POST["email"];
	$per->PostTime=strftime("%Y-%m-%d");
	if ($StrAction=="add")  {
		if (!$per->HavePerson($per->UserName))  {
			$per->InsertPerson();
			print "<h3>成功保存</h3>";
		}
		else  {
			print "<Script language='JavaScript'>alert('抱歉，用户名已存在，请重新输入！');history.go(-1);</script>";
		} 
	}
	else  {
		$per->UpdatePerson($per->UserName);
		print "<h3>成功更新</h3>";
	}

?>
</body>
<script language="javascript">
  // 刷新父级窗口，延迟此关闭
  opener.location.reload();
  setTimeout("window.close()",600);
</script>
</html>

