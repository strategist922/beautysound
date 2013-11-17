<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>保存新闻信息</title>
</head>
<body>
<?PHP
	include('..\Class\News.php');
	$ns = new News();
	//得到动作参数，如果为add则表示创建新闻，如果为edit则表示更改新闻
	$StrAction=$_GET["action"];
	//取得新闻题目和内容
	$title=trim($_POST["title"]);
	$content=trim($_POST["content"]);
	$ns->NTitle=$title;
	$ns->NContent=$content;
	$ns->PostTime=strftime("%Y-%m-%d");
	if ($StrAction=="add")  {
		//在数据库表News中插入新闻信息
		$ns->InsertNews();
	}
	else  {
		//更改此新闻信息
		$id=$_GET["id"];
		$ns->UpdateNews($id);
	} 
	echo("<h3>新闻成功保存</h3>");
?>
</body>
<script language="javascript">
  // 刷新父级窗口，延迟此关闭
  opener.location.reload();
  setTimeout("window.close()",600);
</script>
</html>
