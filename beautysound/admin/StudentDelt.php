<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>ɾ��ѧԱ��Ϣ</title>
<link href=../style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('..\Class\Student.php');
	$ns = new Student();
	//�����ݿ�������ɾ��������Ϣ
	$id=$_GET["RealName"];
	$ns->DeletePerson($RealName);
?>
</form>
<script language="javascript">
  history.go(-1);
</script>
</body>
</html>








