<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>删除学员信息</title>
<link href=../style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('..\Class\Student.php');
	$ns = new Student();
	//从数据库中批量删除新闻信息
	$id=$_GET["RealName"];
	$ns->DeletePerson($RealName);
?>
</form>
<script language="javascript">
  history.go(-1);
</script>
</body>
</html>








