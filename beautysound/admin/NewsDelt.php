<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>删除新闻信息</title>
<link href=../style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('..\Class\News.php');
	$ns = new News();
	//从数据库中批量删除新闻信息
	$id=$_GET["id"];
	$ns->DeleteNews($id);
?>
</form>
<script language="javascript">
  history.go(-1);
</script>
</body>
</html>








