<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>决赛详情</title>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>
   
   <table border="1" width="100%" cellspacing="0" cellpadding="0" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">
      <tr>
        <td width="100%" bgcolor="#A4A4FF" height="18" align=center><font size=3><b>决赛</b></font></td>
      </tr>
      <tr>
         <td width="100%" height="1" align="left" valign="top" bgcolor="#FFFF99">
 <table border="1" width="100%" cellspacing="1" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">
   <tr><td width="15%">学员名</td><td width="15%">导师名</td><td width="15%">得分</td><td width="15%">评语</td></tr>
   
<?PHP 
	include('Class\juesai.php');
	$ns = new juesai();
	$results = $ns-> Getjuesailist();
	while($row = $results->fetch_row())  {
?>
    <tr>
<td><?PHP echo($row[0]); ?></td>
<td><?PHP echo($row[1]); ?></td>
<td><?PHP echo($row[3]); ?></td>
<td><?PHP echo($row[2]); ?></td>
</tr>
<?PHP } 	
?>
</table>
</table>
 <p align="center">
 <a href="javascript:window.close()">[关闭]</a></p>
</body>
</html>
