<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=style.css rel=STYLESHEET type=text/css>
<style type="text/css">
<!--
.STYLE1 {
	font-size: medium;
	font-weight: bold;
}
-->
</style>
</head>
<script language="javascript">
function newswin(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=200,top=200";
  oth = oth+",width=600,height=500";
  var newswin=window.open(url,"newswin",oth);
  newswin.focus();
  return false;
}
</script>
<body topmargin=0>
<center>
<table border="0" width="700" cellspacing="0" cellpadding="0">
<tr></tr>
 <tr>
    <td width="100%" valign="top" align="center">

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <?PHP 
	$sltCnd=$_POST["slt"];
	$sKey=$_POST["key"];
	include('class/Student.php');
	$st = new Student();
	if ($sltCnd=="title")  {
		$sql="Select * From Student Where RealName Like '%".$sKey."%' Order By PostTime Desc";
	}
	elseif ($sltCnd=="sex")  {
		$sql="Select * From Student Where Sex Like '%".$sKey."%' Order By PostTime Desc";
	}
	elseif ($sltCnd=="nature") {
		$sql="Select * From Student Where Nature Like '%".$sKey."%' Order By PostTime Desc";
	}
	elseif ($sltCnd=="colledge") {
		$sql="Select * From Student Where College Like '%".$sKey."%' Order By PostTime Desc";
	
	}
	elseif ($sltCnd=="describe") {
		$sql="Select * From Student Where describe Like '%".$sKey."%' Order By PostTime Desc";
	
	} 
?>    
        </p>
      <table border="1" width="100%" cellspacing="0" cellpadding="0" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">
      <tr>
        <td width="100%" bgcolor="#A4A4FF" height="18" align=center><span class="STYLE1">查询结果</span></td>
      </tr>
      <tr>
         <td width="100%" valign="top" align="left" height="1">
<?PHP 
	$results = $st->GetStudentSearch($sql);
?>  
         <table border="1" width="100%" cellspacing="1" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">
            <tr>
             <td width="15">姓名</td><td>个人描述</td>
            </tr>
<?PHP
	$exist = false;
	while($row = $results->fetch_row())  {
		$exist = true;
?>  
<tr><td> <a href='StudentView.php?id=<?PHP  echo $row[0]; ?>' onClick='return newswin(this.href)'><?PHP   echo $row[0]; ?></a></td>

<td><?PHP echo($row[9]); ?></td>
</tr>

<?PHP 
	} 
?>
     
    </table>
  
</table>
<?PHP  
	if(!$exist)  {
		print "没有符合条件的学员";
	} 
?>
<p align=center><a href="javascript:history.go(-1);">[ 返回 ]</a>
</body>
</html>
