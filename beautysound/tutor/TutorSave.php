<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>��Ϣ����</title>
</head>
<body>
<?PHP
	include('../class/Tutor.php');
	//�õ��������������Ϊadd���ʾ��Ӳ��������Ϊupdate���ʾ���Ĳ���
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
			print "<h3>�ɹ�����</h3>";
		}
		else  {
			print "<Script language='JavaScript'>alert('��Ǹ���û����Ѵ��ڣ����������룡');history.go(-1);</script>";
		} 
	}
	else  {
		$per->UpdatePerson($per->RealName);
		print "<h3>�ɹ�����</h3>";
	}

?>
</body>
<script language="javascript">
  // ˢ�¸������ڣ��ӳٴ˹ر�
  opener.location.reload();
  setTimeout("window.close()",600);
</script>
</html>

