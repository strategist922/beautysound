<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>海选详情</title>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('Class\haixuan.php');
	$ns = new haixuan();
	$results = $ns->Gethaixuanlist();
	if($row = $results->fetch_row())  {
?>
<table border="0" width="100%" cellspacing="6">
<tr><td width="100%" align=center><font size=4><b>海选</b></font></td></tr>
<tr><td>学员名<?PHP echo($row[0]); ?></td></tr>
<tr><td>得分:<?PHP echo($row[2]); ?></td></tr>
<tr><td>评语:<?PHP echo($row[1]); ?></td></tr>
</table>
<?PHP } 
	
?>
 <p align="center"><a href="javascript:window.close()">[�� ��]</a></p>
</body>
</html>
