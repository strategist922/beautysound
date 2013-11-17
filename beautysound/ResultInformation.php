<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导师信息</title>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('Class\Tutor.php');
	$ns = new Tutor();
	$RealName=$_GET["id"];
	$results = $ns->GetPersonInfo($RealName);
	$exist = false;
	if($row = $results->fetch_row())  {
?>
<table border="0" width="100%" cellspacing="6">
<tr><td width="100%" align=center><font size=4><b>姓名:<?PHP echo($row[0]); ?></b></font></td></tr>
<tr><td>性别:<?PHP echo($row[2]); ?></td></tr>
<tr><td>最好听歌曲:<?PHP echo($row[3]); ?></td></tr>
<tr><td>个人描述:<?PHP echo($row[4]); ?></td></tr>
</table>
<?PHP } 
	if ($exist)
	{
		echo("抱歉，没有此新闻");
	}
?>
 <p align="center"><a href="javascript:window.close()">[关 闭]</a></p>
</body>
</html>
