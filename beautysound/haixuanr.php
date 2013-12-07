<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>

  海选
   <table border="0" width="100%" cellspacing="6">
   <tr><td>学员名</td><td>得分</td><td>评语</td></tr>
<?PHP 
	include('Class\haixuan.php');
	$ns = new haixuan();
	$results = $ns-> Gethaixuanlist();
	while($row = $results->fetch_row())  {
?>
    <tr>
<td><?PHP echo($row[0]); ?></td>
<td><?PHP echo($row[2]); ?></td>
<td><?PHP echo($row[1]); ?></td>
</tr>
<?PHP } 	
?>
</table>
 <p align="center"><a href="javascript:window.close()">[关闭]</a></p>
</body>
</html>
