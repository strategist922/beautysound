<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>��Ϣ����</title>
</head>
<body>
<?PHP
	Public $Birth; //��������
	public $Nature; //����
	public $Married; //����״��
	public $Education; //ѧ��
	public $College; //��ҵѧУ
	public $Email; //�����ʼ�
	public $describe;
	public $PostTime; 
	include('../class/Student.php');
	//�õ��������������Ϊadd���ʾ��Ӳ��������Ϊupdate���ʾ���Ĳ���
	$StrAction=$_GET["action"];
	$per = new Tutor();
	$per->RealName=$_POST["username"];
	$per->Pwd=$_POST["pwd"];
	$per->Birth=$_POST["birth"];
	$per->Sex=$_POST["sex"];
	$per->describe=$_POST["describ"];
	$per->Nature=$_POST["nature"];
	$per->Married=$_POST["married"];
	$per->Education=$_POST["education"];
	$per->College=$_POST["college"];
	$per->Email=$_POST["email"];
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

