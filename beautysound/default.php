<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="style.css" type="text/css" rel=stylesheet>
<title>ͶƱϵͳ</title>
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
                      <td width="40%">ͶƱ��Ŀ</td>
                      <td width="40%" colspan="2">��ռ��ͶƱ���ٷֱ�</td>
                      <td width="10%">Ʊ��</td>
                    </tr>
                    
<?PHP
	// ȡ������ͶƱ����
	include('Class\VoteItem.php');
	$objItem = new VoteItem();
	$total = $objItem->SumItemCount();

	// ȡ��ÿ��ͶƱ��Ŀ��Ϣ
	$results = $objItem->load_VoteItem();
	while($row = $results->fetch_row())  {
		if($total == 0)
			$itotal = 1;
		else 
			$itotal = $total;
		
		// ����ÿ��ͶƱ��Ŀ�ٷֱ�ͼƬ����
		$imgvote = (int)$row[2] * 170 / $itotal;
?>
              
	<tr><td bgcolor="#FFFFFF"><?PHP echo($row[1]);?></td>
	<td colspan="2" bgcolor="#FFFFFF">
	   <img src=images/bar1.gif width=<?PHP echo($imgvote); ?> height=10><font style="font:7pt" face="Verdana">
	   <?PHP echo((int)$row[2]*100/$itotal); ?>%</font></td>
    <td bgcolor="#FFFFFF" align="center"><?PHP echo($row[2]); ?></td>
    </tr>
<?PHP } // end of while ?>
     <tr> <td colspan="2" align="left"></td>
      <td colspan="2" align="right">��Ʊ����<?PHP echo($total); ?></td>

                    </tr>
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


