<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息保存</title>
</head>
<body>
<?PHP
	include('../class/Tutor.php');
	//得到动作参数，如果为add则表示添加操作，如果为update则表示更改操作
	$StrAction=$_GET["action"];
	$per = new Tutor();
	$per->RealName=$_POST["username"];
	$per->Pwd=$_POST["pwd"];
	$per->bestsong=$_POST["bestsong"];
	$per->Sex=$_POST["sex"];
	$per->describe=$_POST["describ"];
	$per->PostTime=strftime("%Y-%m-%d");
	if ($StrAction=="add")  {
		if (!$per->HavePerson($per->RealNamee))  {
			$per->InsertPerson();
			print "<h3>成功保存</h3>";
		}
		else  {
			print "<Script language='JavaScript'>alert('抱歉，用户名已存在，请重新输入！');history.go(-1);</script>";
		} 
	}
	else  {
		$per->UpdatePerson($per->RealName);
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

