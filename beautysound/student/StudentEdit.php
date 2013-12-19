<?PHP include('isStudent.php'); ?>
<html>
<head>

<title>个人信息</title>
<link rel="stylesheet" href="../style.css">
<Script Language="JavaScript">
function CheckFlds(){
if (document.form1.realname.value==""){
   alert("无此信息");
   form1.realname.focus;
   return false;
 } 
return true;
}
</Script>
</head>
<?PHP 
	$per = new Student();
	$results = $per->GetPersonInfo($_SESSION["UserName"]);
	if ($row = $results->fetch_row())  {
?>
<body topmargin=0 leftmargin="2">
<form name="form1" method="POST" action="StudentSave.php?action=edit" onSubmit="return CheckFlds()">
 <table border="1" cellspacing="0" width="100%" bordercolor="#64B9E1" bordercolorlight="#64B9E1" bordercolordark="#FFFFFF">
    <tr>
      <td width="20%" bgcolor="#eeeeee">用户名</td>
      <td width="80%"><?PHP   echo($_SESSION["UserName"]); ?></td>
    </tr>
    <tr>
      <td bgcolor="#eeeeee">性别</td>
      <td><select size="1" name="sex">
       <?PHP   if ($row[2])
  {
?>
          <option value="0">男</option>
          <option value="1" selected>女</option>
       <?PHP   }
    else
  {
?>
          <option selected value="0">女</option>
          <option value="1">男</option>
       <?PHP   } ?>
        </select></td>
    </tr>
	 <tr>
      <td bgcolor="#eeeeee">出生日期</td>
      <td><input type="text" name="birth" size="20" value="<?PHP   echo($row[3]); ?>"></td>
    </tr>
	 <tr>
      <td bgcolor="#eeeeee">民族</td>
      <td><select size="1" name="nature">
          <option selected value="<?PHP   echo($row[4]); ?>"><?PHP   echo($row[4]); ?></option>
          <option value="汉族">汉族</option>
          <option value="满族">满族</option>
          <option value="藏族">藏族</option>
          <option value="回族">回族</option>
        </select></td>
    </tr>
	 <tr>
      <td bgcolor="#eeeeee">婚姻状况</td>
      <td><select size="1" name="married">
          <option selected value="<?PHP   echo($row[5]); ?>"><?PHP   echo($row[5]); ?></option>
          <option value="已婚">已婚</option>
          <option value="未婚">未婚</option>
          <option value="离异">离异</option>
        </select></td>
    </tr>
	<tr>
      <td bgcolor="#eeeeee">教育程度</td>
      <td><select size="1" name="education">
          <option selected value="<?PHP   echo($row[6]); ?>"><?PHP  echo($row[6]); ?></option>
          <option value="本科">本科</option>
		   <option value="未知">未知</option>
     
        </select></td>
    </tr>
	 <tr>
      <td bgcolor="#eeeeee">大学</td>
      <td><input type="text" name="college" size="40" value="<?PHP   echo($row[7]); ?>"></td>
    </tr>
	 <tr>
      <td bgcolor="#eeeeee">Email</td>
      <td><input type="text" name="email" size="20"  value="<?PHP   echo($row[8]); ?>"></td>
     </tr>
	<tr>
      <td bgcolor="#eeeeee">个人描述</td>
      <td><input type="text" name="describ" size="20" value="<?PHP   echo($row[9]); ?>"></td>
    </tr>		
  </table>
  <p align=left><input type="submit" value=" 提交 " name="B1">
  <input type="reset" value=" 重写 " name="B2"></p>
</form>
<?PHP } ?>
</body>
</html>
