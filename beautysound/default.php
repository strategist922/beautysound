<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" type="text/css" rel=stylesheet>
<title>投票结果</title>
</head>
<body topmargin="2" leftmargin="2">
<form method=post  id="form1"><center>
<table border="0" width="98%" cellpadding="0" cellspacing="4">
  <tr>
    <td width="100%">
      <table border="0" width="100%" cellspacing="0" cellpadding="0" style="background-color:#B0DCF0;border: 1 dotted #A7D8EF">
        <tr>
          <td width="100%">
            <table border="0" width="100%" cellspacing="1" cellpadding="3">
              <tr>
                <td bgcolor="#FFFFFF" valign="top">
                  <table border="0" width="100%" cellspacing="1" style="background-color:#B0DCF0;border: 1 dotted #A7D8EF">
                    <tr>
                      <td width="40%">投票学员</td>
                      <td width="10%">票数</td>
                    </tr>
                    
<?PHP
	// 取得这批投票总数
	include('Class\Student.php');
	$stu = new student();
	$total = $stu->SumCount();//总投票数
    
	// 取得每个投票项目信息
	$results = $stu->get();
	while($row = $results->fetch_row())  {
?>
        <tr><td><?php echo($row[0]);?></td>
		<td><?php echo($row[1]);?></td></tr>      
	
<?PHP } // end of while ?>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</center>
<input type=hidden  name="poster">
</form><body>
<script language=javascript>
opener.location.reload();
</script>
</html>


