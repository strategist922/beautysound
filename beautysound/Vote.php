<?PHP include('isUser.php');
$UserId=trim($_SESSION["UserName"]);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" type="text/css" rel=stylesheet>
<title>投票系统</title>
<script language="javascript">
function SelectChk()
{
	var s=false;
	var deptid,n=0;
	var strid,strurl;
	var nn = self.document.all.item("poster");
	var j;
	for (j=0;j<nn.length;j++)
	{
		if (self.document.all.item("poster",j).checked)
		{
			n = n + 1;
			s=true;			 
			deptid = self.document.all.item("poster",j).id+"";			
			if(n==1)
			{
				strid = deptid;
			}
			else
			{
				strid = strid + "," + deptid;
			}
		}
	}
	strurl = "postvote.php?cid=" + strid;
	if(s)	{
		alert("请选择你支持的学员!");
		return false;
	}
	window.open(strurl,"newwin","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=300");
	return false;	
}
function newwin(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=200,top=200";
  oth = oth+",width=400,height=300";
  var newwin=window.open(url,"newwin",oth);
  newwin.focus();
  return false;
}

</script>
</head>
<body topmargin="2" leftmargin="2">
<form method=post  id="form1"><center>
 <h1>&nbsp;</h1>
 <h1>&nbsp;</h1>
 <h1>&nbsp;</h1>
 <h1>&nbsp;</h1>
 <h1>&nbsp;</h1>
 <h1>选择您支持的学员，梦想从这里起航</h1>
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
	<tr><td bgcolor="#FFFFFF">
<?PHP
	//取得当前投票人的ip地址，判断是否已经投票完毕	
	include('class/VoteIp.php');				  
	$objIP = new VoteIP();
	$isvoted = 0;
	if($objIP->exists($UserId))
		$isvoted = 1;
?>              
	<tr><td bgcolor="#FFFFFF">
	<?PHP
include('class/Student.php');
$st = new Student();
$results = $st->GetPersonlist();
while($row = $results->fetch_row())  
	 {
	 ?>
	<td bgcolor="#FFFFFF">
	 <?PHP if($isvoted==0){ // 如果没有投过票，则显示复选框 ?>
	<input type="checkbox" name="poster" id="<?PHP echo($row[0]); ?>">
	<?PHP 
		} // end of if
	    echo($row[0]); ?></td>
<?PHP
	}  // end of while
?>
     <tr>
       <td align="center">
     <?PHP
		// 判断是否已经投票完毕					  
		if($isvoted==1)  {  ?>
			您已经投过票了&nbsp;&nbsp;<a href=default.php onClick="return newwin(this.href)"><font color=blue>查看投票结果</font></a>
	<?php	}
		else {			 
		?>	<input class=submit type=submit value="投 票 " name=submit onClick="return SelectChk();">
		    <a href=default.php onClick="return newwin(this.href)"><font color=blue>查看投票结果</font></a>
	<?php	}
	 ?>
		</td>
      </tr>
                  </table>
                </td>
              </tr>
				</table>
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
</html>

