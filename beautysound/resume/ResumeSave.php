<html>
<head>
<title>ע�ᱣ��</title>
</head>
<body>
<?PHP
	include('../class/Person.php');
	//�õ��������������Ϊadd���ʾ��Ӳ��������Ϊupdate���ʾ���Ĳ���
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
			print "<h3>�ɹ�����</h3>";
		}
		else  {
			print "<Script language='JavaScript'>alert('��Ǹ���û����Ѵ��ڣ����������룡');history.go(-1);</script>";
		} 
	}
	else  {
		$per->UpdatePerson($per->UserName);
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

