<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>决赛详情</title>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>
   <h><center>决赛</h>
   <table border="0" width="100%" cellspacing="6">
   <tr><td>学员名</td><td>导师名</td><td>得分</td><td>观众投票</td><td>评语</td></tr>
   
<?PHP 
	include('Class\juesai.php');
	$ns = new chusai();
	$results = $ns-> Getchusailist();
	while($row = $results->fetch_row())  {
?>
    <tr>
<td><?PHP echo($row[0]); ?></td>
<td><?PHP echo($row[1]); ?></td>
<td><?PHP echo($row[3]); ?></td>
<td><?PHP echo($row[4]); ?></td>
<td><?PHP echo($row[2]); ?></td>
</tr>
<?PHP } 	
?>
</table>
 <p align="center"><a href="javascript:window.close()">[关闭]</a></p>
</body>
</html>
