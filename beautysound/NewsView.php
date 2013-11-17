<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新新闻</title>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('Class\News.php');
	$ns = new News();
	$id=$_GET["id"];
	$results = $ns->GetNewsInfo($id);
	$exist = false;
	if($row = $results->fetch_row())  {
?>
<table border="0" width="100%" cellspacing="6">
<tr><td width="100%" align=center><font size=4><b><?PHP echo($row[1]); ?></b></font></td></tr>
<tr><td><?PHP echo($row[2]); ?></td></tr>
<tr><td><?PHP echo($row[3]); ?></td></tr>
</table>

<?PHP } 
	if ($exist)
	{
		echo("无此条新闻");
	}
?>
 <p align="center"><a href="javascript:window.close()">[关闭]</a></p>
</body>
</html>
