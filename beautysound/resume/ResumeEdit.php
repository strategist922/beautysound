<?PHP include('isUser.php'); ?>
<html>
<head>
<title>编辑个人信息</title>
<link rel="stylesheet" href="../style.css">
<Script Language="JavaScript">
function CheckFlds(){
if (document.form1.realname.value==""){
   alert("请输入真实姓名！");
   form1.realname.focus;
   return false;
 } 
return true;
}
</Script>
</head>
<?PHP 
	$per = new Person();
	$results = $per->GetPersonInfo($_SESSION["UserName"]);
	if ($row = $results->fetch_row())  {
?>
<body topmargin=0 leftmargin="2">
<form name="form1" method="POST" action="ResumeSave.php?action=edit" onSubmit="return CheckFlds()">
  <br>
  <br>
  <br>
  <br>
 <table border="1" cellspacing="0" width="100%" bordercolor="#64B9E1" bordercolorlight="#64B9E1" bordercolordark="#FFFFFF">
    <tr>
      <td width="20%" bgcolor="#eeeeee">用户名</td>
      <td width="80%"><?PHP   echo($_SESSION["UserName"]); ?></td>
    </tr>
    <tr>
      <td bgcolor="#eeeeee">真实姓名</td>
      <td><input type="text" name="realname" size="20" value="<?PHP   echo($row[2]); ?>"></td>
    </tr>
    <tr>
      <td bgcolor="#eeeeee">性别</td>
      <td><select size="1" name="sex">
       <?PHP   if ($row[3])
  {
?>
          <option value="0">男</option>
          <option value="1" selected>女</option>
       <?PHP   }
    else
  {
?>
          <option selected value="0">男</option>
          <option value="1">女</option>
       <?PHP   } ?>
        </select></td>
    </tr>		
    <tr>
      <td bgcolor="#eeeeee">Email</td>
      <td><input type="text" name="email" size="20"  value="<?PHP   echo($row[4]); ?>"></td>
    </tr>
  </table>
  <p align=left><input type="submit" value=" 提 交 " name="B1">
  <input type="reset" value=" 重 写 " name="B2"></p>
</form>
<?PHP } ?>
</body>

</html>
