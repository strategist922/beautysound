<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>����������Ϣ</title>
</head>
<body>
<?PHP
	include('..\Class\News.php');
	$ns = new News();
	//�õ��������������Ϊadd���ʾ�������ţ����Ϊedit���ʾ��������
	$StrAction=$_GET["action"];
	//ȡ��������Ŀ������
	$title=trim($_POST["title"]);
	$content=trim($_POST["content"]);
	$ns->NTitle=$title;
	$ns->NContent=$content;
	$ns->PostTime=strftime("%Y-%m-%d");
	if ($StrAction=="add")  {
		//�����ݿ��News�в���������Ϣ
		$ns->InsertNews();
	}
	else  {
		//���Ĵ�������Ϣ
		$id=$_GET["id"];
		$ns->UpdateNews($id);
	} 
	echo("<h3>���ųɹ�����</h3>");
?>
</body>
<script language="javascript">
  // ˢ�¸������ڣ��ӳٴ˹ر�
  opener.location.reload();
  setTimeout("window.close()",600);
</script>
</html>
