<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=style.css rel=STYLESHEET type=text/css>
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
 <tr><td colspan="3" height="116"><!--#include file="head.htm"--></td></tr>
 <tr>
    <td width="100%" valign="top" align="center">
<?PHP 
	$flg=$_GET["m"];
	include('class/Student.php');
	include('class/Tutor.php');
	$st = new Student();
	$tu = new Tutor();

	if ($flg==0)  {
		$sTitle="学员信息";?>
		<a href="Search.php"><font color=blue>[学员查询]</font></a> 
		<?PHP $results = $st->GetPersonlist();
	}
	else 
	 {
		$sTitle="导师信息";
		$results = $tu->GetPersonlist();
	}

?>    
<p> <br> </p>
	 <p> <br> </p>
	  <p> <br> </p>
	   <p> <br> </p>
	    <p> <br> </p>
		 <p> <br> </p>
    <table border="1" width="100%" cellspacing="0" cellpadding="0" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">
      <tr>
        <td width="100%" bgcolor="#A4A4FF" height="18" align=center><font size=3><b><?PHP echo $sTitle; ?></b></font></td>
      </tr>
      <tr>
         <td width="100%" valign="top" align="left" height="1">
 <table border="1" width="100%" cellspacing="1" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">
       <tr><?PHP if ($flg==0)  {
?>
          
         <td width="15%">姓名<td>个人描述</td><td width="5%">导师</td>
           <?PHP }
			  else   {
?>
         <td width="15%">姓名<td>个人描述</td>
           <?PHP } ?>
        </tr>
		
<?PHP if ($flg==0)   {
	  while($row = $results->fetch_row())   {
?><tr>
	  <td><a href='StudentView.php?id=<?PHP echo $row[0]; ?>' onClick='return newswin(this.href)'><?PHP     echo $row[0]; ?></a></td>
	 <td><?PHP     echo $row[9]; ?></td> <td><a href='TutorView.php?id=<?PHP echo $row[10]; ?>' onClick='return newswin(this.href)'><?PHP     echo $row[10]; ?></a></td>
	
<?PHP  
     } 
  }
  elseif ($flg==1)  {
	  while($row = $results->fetch_row())   {
?>
	  <td ><a href="TutorView.php?id=<?PHP     echo $row[0]; ?>" onClick='return newswin(this.href)'><?PHP     echo $row[0]; ?></a></td>
   <td><?PHP     echo $row[4]; ?></td></tr>
<?PHP 
	 } 
  }
 ?>
       
    </table>
    </td>
  </tr>
</table>
</body>
</html>
