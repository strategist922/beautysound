<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学员信息</title>
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<body>
<?PHP 
	include('Class\Student.php');
	$ns = new Student();
	$RealName=$_GET["id"];
	$results = $ns-> GetPersonInfo($RealName);
	$exist = false;
	if($row = $results->fetch_row())  {
?>     $exist = true;
<table border="0" width="100%" cellspacing="6">
<tr><td width="100%" align=center><font size=4><b>姓名<?PHP echo($row[0]); ?></b></font></td></tr>
<tr><td>性别:<?PHP echo($row[2]); ?></td></tr>
<tr><td>出生日期:<?PHP echo($row[3]); ?></td></tr>
<tr><td>民族:<?PHP echo($row[4]); ?></td></tr>
<tr><td>婚姻状况:<?PHP echo($row[5]); ?></td></tr>
<tr><td>学历:<?PHP echo($row[6]); ?></td></tr>
<tr><td>毕业学校:<?PHP echo($row[7]); ?></td></tr>
<tr><td>电子邮件:<?PHP echo($row[8]); ?></td></tr>
<tr><td>个人描述:<?PHP echo($row[9]); ?></td></tr>
<tr><td>导师信息:<?PHP echo($row[10]); ?></td></tr>
</table>

<?PHP } 
	if ($exist)
	{
		echo("没有此学员信息");
	}
?>
 <p align="center"><a href="javascript:window.close()">[关闭]</a></p>
</body>
</html>
