<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>ɾ��������Ϣ</title>
<link href=../style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('..\Class\News.php');
	$ns = new News();
	//�����ݿ�������ɾ��������Ϣ
	$id=$_GET["id"];
	$ns->DeleteNews($id);
?>
</form>
<script language="javascript">
  history.go(-1);
</script>
</body>
</html>








