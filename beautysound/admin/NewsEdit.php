<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>编辑新闻信息</title>
<link href=../style.css rel=STYLESHEET type=text/css>
<script language="javascript">
  function checkFields()
  {
    if (myform.title.value=="") {
       alert("新闻题目不能为空");
       myform.title.onfocus();
       return false;
    }
    if (myform.content.value=="") {
       alert("新闻内容不能为空");
       myform.content.onfocus();
       return false;
    }
    return true;
  }
</script>
</head>
<body>

<?PHP 
	include('..\Class\News.php');
	//从数据库中取得此新闻信息
	$ns = new News();
	//参数id表示新闻编号
	$id=$_GET["id"];
	$results = $ns->GetNewsInfo($id);
	$exist = false;	// 判断是否存在
	if($row = $results->fetch_row()) {
		$exist = true;
?>
<form name="myform" method="POST" action="NewsSave.php?action=edit&id=<?PHP   echo($id); ?>" OnSubmit="return checkFields()"> 
      <table border="0" width="100%" cellspacing="1">
          <tr>
            <td width="100%">新闻标题 
            <input type="text" name="title" size="20" value="<?PHP   echo($row[1]); ?>"></td>
          </tr>
          <tr>
            <td width="100%">新闻内容</td>
          </tr>
          <tr>
            <td width="100%"><textarea rows="12" name="content" cols="55"><?PHP   echo($row[2]); ?></textarea></td>
          </tr>
        </table>
        <p align="center"><input type="submit" value=" 提 交 " name="B1">
        <input type="reset" value=" 重写 " name="B2"></p>
</form>
<?PHP
	} 
	else  {
		echo("没有此新闻");
	}
?>
</body>
</html>
