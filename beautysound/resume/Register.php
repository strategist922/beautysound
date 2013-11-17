<html>
<head>
<title>用户注册</title>
<link rel="stylesheet" href="../style.css">
<Script Language="JavaScript">
// 域校验
function CheckFlds(){
 var p1,p2;
 p1 = document.form1.pwd.value;
 p2 = document.form1.pwd2.value;
 if (document.form1.username.value==""){
   alert("请输入用户名！");
   form1.username.focus;
   return false;
 }
 if (p1==""){
   alert("请输入密码！");
   form1.pwd.focus;
   return false;
 } 
 if (p2==""){
   alert("请输入确认密码！");
   form1.pwd2.focus;
   return false;
 } 
 if (!p1==p2){
   alert("两次输入的密码必须相同！");
   form1.pwd.focus;
   return false;
 } 
if (p1.length<6){
   alert("输入的密码必须度大于5！");
   form1.pwd.focus;
   return false;
 } 
if (document.form1.realname.value==""){
   alert("请输入真实姓名！");
   form1.realname.focus;
   return false;
 } 
return true;
}
</Script>
</head>
<body>
<form name="form1" method="POST" action="ResumeSave.php?action=add" onSubmit="return CheckFlds()">
  <table align=center border="1" cellspacing="0" width="600" bordercolor="#64B9E1" bordercolorlight="#64B9E1" bordercolordark="#FFFFFF">
    <tr>
      <td width="20%" bgcolor="#CEE7FF">用户名</td>
      <td width="80%"><input type="text" name="username" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">密码</td>
      <td><input type="password" name="pwd" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">确认密码</td>
      <td><input type="password" name="pwd2" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">真实姓名</td>
      <td><input type="text" name="realname" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">性别</td>
      <td><select size="1" name="sex">
          <option selected value="0">男</option>
          <option value="1">女</option>
        </select></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">Email</td>
      <td><input type="text" name="email" size="40"></td>
    </tr>
  </table>
  <p align="center"><input type="submit" value=" 提 交 " name="B1"><input type="reset" value=" 重 写 " name="B2"></p>
</form>

</body>

</html>

