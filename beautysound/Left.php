<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table border="1" width="100%" cellspacing="0" cellpadding="6" bordercolorlight="#eeeeee" bordercolordark="#FFFFFF" bgcolor="#FFFFFF">      
<tr>         
  <td width="100%" bgcolor="#eeeeee" height="18" align="center">用户登录</td>
</tr>
<?PHP
	include('Class/Student.php');
	include('Class/Person.php');
	include('Class/Tutor.php');
	$per = new Person();
	$cp = new Student();
	$tu=new Tutor();	

	session_start();
	error_reporting(E_ALL^E_NOTICE);
	$flag=$_SESSION["UserFlag"];

	$isUser=false;
	$uname=$_SESSION["UserName"];
	$upwd=$_SESSION["UserPwd"];

	if ($flag=="0")  {
		$per->UserName = $uname;
		$per->UserPwd = $upwd;
		$isUser = $per->HaveUser();
		if($isUser)  {
			$results = $per->GetPersonInfo($uname);
			if ($row = $results->fetch_row())  {
?>    
<tr>
 <td width="100%" height="18" bgcolor="#eeeeee">
  <table border="0" cellspacing="0" cellpadding="6" width="100%">
   <tr>
    <td width="100%" bgcolor="#eeeeee">用户名:<?PHP  echo($row[0]); ?><br>
      姓名:<?PHP  echo($row[2]); ?><br>E-mail:<?PHP     echo($row[4]); ?></td></tr> 
   <tr>
    <td width="100%" align="center" bgcolor="#eeeeee">
         <a href="resume/index.php" target="_parent">个人数据管理</a>
    </td>
   </tr>
  </table>         
 </td>         
</tr>
<?PHP 
			}	// end of "if ($row = $results->fetch_row())"
		} 
	}  
	elseif ($flag=="1")  {
		$cp->RealName = $uname;
		$cp->Pwd = $upwd;
		$isUser = $cp->HaveUser();
		if($isUser)  {
			$results = $cp->GetPersonInfo($uname);
			if ($row = $results->fetch_row())  {
			//显示学员信息
?>    
<tr>
 <td width="100%" height="18" bgcolor="#eeeeee">
  <table border="0" cellspacing="1" width="100%">
   <tr>
    <td width="100%" bgcolor="#eeeeee">用户名:<?PHP     echo($row[0]); ?><br>
                性别:<?PHP     echo($row[2]); ?></td></tr> 
   <tr>
    <td width="100%" align="center" bgcolor="#eeeeee">
           <a href="student/index.php" target="_parent">学员数据管理</a>
    </td>
   </tr>          
  </table>         
 </td>         
</tr> 
<?PHP 
			}	// end of "if ($row = $results->fetch_row())"
		} 
	}  
	elseif ($flag=="2")  {
		$tu->RealName = $uname;
		$tu->Pwd = $upwd;
		$isUser = $tu->HaveUser();
		if($isUser)  {
			$results = $tu->GetPersonInfo($uname);
			if ($row = $results->fetch_row())  {
			//显示导师信息
?>    
<tr>
 <td width="100%" height="18" bgcolor="#eeeeee">
  <table border="0" cellspacing="1" width="100%">
   <tr>
    <td width="100%" bgcolor="#eeeeee">用户名:<?PHP     echo($row[0]); ?><br>
                性别:<?PHP     echo($row[2]); ?></td></tr> 
   <tr>
    <td width="100%" align="center" bgcolor="#eeeeee">
           <a href="tutor/index.php" target="_parent">导师数据管理</a>
    </td>
   </tr>          
  </table>         
 </td>         
</tr> 
<?PHP 
			}  // end of $row = $results->fetch_row())  {
		} 
	} 
	if (!$isUser)  {
		//如果没有登录，则显示登录表单
?>
  <tr>         
   <td width="100%" height="18" bgcolor="#eeeeee">         
    <table border="0" cellspacing="1" height="58" bgcolor="#FFFFFF" width="100%">         
     <tr>         
      <td width="100%" bgcolor="#FFFFFF" height="55">         
         <form method="POST" action="putSession.php">
             用户名:     
          <input type="text" name="loginname" size="12" value="">         
          <br>密&nbsp; 码:     
          <input type="password" name="password" size="12" value="">            <br>用户类型:<SELECT size="1" name="flag">
           <option value="0">个人</option>
           <option value="1">学员</option>
		   <option value="2">导师</option>
          </SELECT>                            
          <br><center><input type="submit" value="确定" name="B1"></center>     <br><center><a href="resume/Register.php" onclick="return newswin(this.href)">个人用户注册</a></center>
         </form>         
        </td>         
      </tr>         
    </table>         
   </td>         
  </tr> 
<?PHP } ?>                
</table>
