<?PHP include('isAdmin.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻管理</title>
<link href="../style.css" rel="stylesheet">
<script language="javascript">
function news90(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=200,top=200";
  oth = oth+",width=400,height=300";
  var news90=window.open(url,"news90",oth);
  news90.focus();
  return false;
}

function SelectChk()
{
	var s=false;
	var deptid,n=0;
	var strid,strurl;
	var nn = self.document.all.item("news")
	for (j=0;j<nn.length;j++)
	{
		if (self.document.all.item("news",j).checked)
		{
			n = n + 1;
			s=true;
			deptid = self.document.all.item("news",j).id+"";
			if(n==1)
			{
				strid = deptid;
			}
			else
			{
				strid = strid + "," + deptid;
			}
		}
	}

	strurl = "NewsDelt.php?id=" + strid;
	if(!s)	{
		alert("请选择要删除的新闻!");
		return false;
	}
	if ( confirm("你确定要删除这些新闻吗？")) {
		form1.action=strurl;
		form1.submit();
	}
}
function sltAll()
{
	var nn = self.document.all.item("news");
	for(j=0;j<nn.length;j++)
	{
		self.document.all.item("news",j).checked = true;
	}
}
function sltNull()
{
	var nn = self.document.all.item("news");
	for(j=0;j<nn.length;j++)
	{
		self.document.all.item("news",j).checked = false;
	}
}
</script>
</head>
<body link="#000080" vlink="#080080">
<form id="form1" name="form1" method="POST">
<?PHP
	include('..\Class\News.php');
	$ns = new News();
	//按发布时间降序读取新闻
	$results = $ns->GetNewslist();
	$exist = false;

?>
<p align=center><font color="#000080" style="font-size: 12pt"><b>新 闻 管 理</b></font></p> 
<table align=center border="1" cellspacing="0" width="100%" bordercolorlight="#808000" bordercolordark="#FFFFFF">
  <tr>
   <td width="56%" align="center" bgcolor="#eeeeee"><strong>题目</strong></td>
   <td width="24%" align="center" bgcolor="#eeeeee"><strong>时间</strong></td>
   <td width="10%" align="center"  bgcolor="#eeeeee"><strong>修改</strong></td>
   <td width="10%" align="center"  bgcolor="#eeeeee"><strong>选择</strong></td>
  </tr>
<?PHP 
	//循环显示记录
	while($row = $results->fetch_row())  {
		$exist = true;
?>
  <tr>
    <td><a href="../NewsView.php?id=<?PHP  echo($row[0]); ?>" onClick="return news90(this.href)"><?PHP     echo($row[1]); ?></a></td>
	<td align="center"><?PHP     echo($row[3]); ?></td>
    <td align="center"><a href="NewsEdit.php?id=<?PHP     echo($row[0]); ?>" onClick="return news90(this.href)">修改</a></td>
    <td align="center"><input type="checkbox" name="news" id="<?PHP echo($row[0]); ?>"></td>
  </tr>
<?PHP 
	} 
	if (!$exist)
		print "<tr><td colspan=5 align=center>目前还没有新闻。</td></tr></table>";
?>
</table>
		<p align="center">
		<input type="button" value="添加新闻" onClick="news90('NewsAdd.php')" name=add>
		 &nbsp;&nbsp;<input type="button" value="全 选" onClick="sltAll()" name=button1> 
		 &nbsp;&nbsp;<input type="button" value="清 空" onClick="sltNull()" name=button2> 
 		 &nbsp;&nbsp;<input type="submit" value="删 除" name="tijiao" onClick="SelectChk()"> 
<br><br>
<input type=hidden name="news">
</form>
</body>
</html>
