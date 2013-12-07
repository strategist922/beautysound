<html>
<head>
<title>主页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=style.css rel=STYLESHEET type=text/css>
</head>
<script language="javascript">
function newswin(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=200,top=200";
  oth = oth+",width=600,height=450";
  var newswin=window.open(url,"newswin",oth);
  newswin.focus();
  return false;
}
function newOrder(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=200,top=200";
  oth = oth+",width=500,height=150";
  var newOrder=window.open(url,"newOrder",oth);
  newOrder.focus();
  return false;
}
</script>
<body topmargin=0 leftmargin=0>
<center>
<table border="0" width="700" cellspacing="0" cellpadding="0">
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <tr><td colspan="2" height="116" width="698"><?PHP include("head.htm"); ?></td></tr>
 <tr><td width="25%" valign="top"><?PHP include("left.php"); ?></td>
      <td width="75%" valign="top" align="center">
	  <table border="1" width="100%" cellspacing="0" cellpadding="10" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF">
      <tr>
        <td width="100%" bgcolor="#990000" height="18">
		</b>
     最新新闻   </b>     </td>
      </tr>
      </table>
      <table border="1" width="100%" cellspacing="0" cellpadding="10" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF">
<?PHP 
    include('class/News.php');
	$m=0;
	$ns = new News();
	$results = $ns->GetNewslist();
	while($row=$results->fetch_row())  {
		$m++;
		if($m>5)
			break;
			?>
			<tr>
		<td  bgcolor="#FFFFFF">	
		<?PHP
		echo("<a href='NewsView.php?id=" . $row[0] . "' onClick='return newswin(this.href)'>" . $row[1]."</a><br>");?>
		</td>
		<td  bgcolor="#FFFFFF"> <?PHP echo($row[3]) ?> </td>
		</tr>
<?PHP
	} 
	if ($m==0)  {
		echo("暂无新闻");
	}
?>  
</table>
 <table border="1" width="100%" cellspacing="0" cellpadding="10" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF">
      <tr>
        <td width="100%" bgcolor="#990000" height="18">
          最新学员信息      </td>
      </tr>
      </table>
      <table border="1" width="100%" cellspacing="0" cellpadding="10" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF">
<?PHP 
	$m1=0;
	$st = new Student();
	
	$result = $st->GetPersonlist();

?>
	<tr><td bgcolor="#FFFFFF">姓名</td>
	<td bgcolor="#FFFFFF">性别</td>
	<td bgcolor="#FFFFFF">个人描述</td>
	</tr>
<?PHP
	while($r=$result->fetch_row())  {
	 $m1++;
		if($m1>3)
			break;
		else 
		{
?>         
        <tr>
       <td  bgcolor="#FFFFFF">	
		<?PHP
		echo("<a href='StudentView.php?id=" . $r[0] . "' onClick='return newswin(this.href)'>" . $r[0]."</a><br>");?>
		</td>
		<td  bgcolor="#FFFFFF">  <?PHP echo($r[2]); ?> </td>
		<td  bgcolor="#FFFFFF">  <?PHP echo($r[9]); ?> </td>
	 </tr>
<?PHP
	    }
	} 
	if ($m1==0)  {
		echo("暂无学员");
	}
?>  
</table>    
<table border="1" width="100%" cellspacing="0" cellpadding="10" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF">
      <tr>
        <td width="100%" bgcolor="#990000" height="18">
         最新导师信息        </td>
      </tr>
      </table>
      <table border="1" width="100%" cellspacing="0" cellpadding="10" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF">
<?PHP 
	$m2=0;
	$tu = new Tutor();
	$resultr = $tu->GetPersonlist();
	
?>
	<tr><td bgcolor="#FFFFFF">姓名</td>
	<td bgcolor="#FFFFFF">性别</td>
	<td bgcolor="#FFFFFF">个人描述</td>
	</tr>
<?PHP
	while($rr=$resultr->fetch_row())  {
	 $m2++;
		if($m2>2)
			break;
?>
     <tr><td bgcolor="#FFFFFF"> 
	 <?PHP
	 echo("<a href='TutorView.php?id=" . $rr[0] . "' onClick='return newswin(this.href)'>" . $rr[0]."</a><br>");?>
		</td>
		<td  bgcolor="#FFFFFF">  <?PHP echo($rr[2]); ?> </td>
		<td  bgcolor="#FFFFFF">  <?PHP echo($rr[4]); ?> </td>
	 </tr>
<?PHP
	} 
	if ($m2==0)  {
		echo("暂无导师");
	}
?>  
</table>        
</body>
</html>
