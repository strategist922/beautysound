<html>
<head>
<title>�û�ע��</title>
<link rel="stylesheet" href="../style.css">
<Script Language="JavaScript">
// ��У��
function CheckFlds(){
 var p1,p2;
 p1 = document.form1.pwd.value;
 p2 = document.form1.pwd2.value;
 if (document.form1.username.value==""){
   alert("�������û�����");
   form1.username.focus;
   return false;
 }
 if (p1==""){
   alert("���������룡");
   form1.pwd.focus;
   return false;
 } 
 if (p2==""){
   alert("������ȷ�����룡");
   form1.pwd2.focus;
   return false;
 } 
 if (!p1==p2){
   alert("������������������ͬ��");
   form1.pwd.focus;
   return false;
 } 
if (p1.length<6){
   alert("������������ȴ���5��");
   form1.pwd.focus;
   return false;
 } 
if (document.form1.realname.value==""){
   alert("��������ʵ������");
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
      <td width="20%" bgcolor="#CEE7FF">�û���</td>
      <td width="80%"><input type="text" name="username" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">����</td>
      <td><input type="password" name="pwd" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">ȷ������</td>
      <td><input type="password" name="pwd2" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">��ʵ����</td>
      <td><input type="text" name="realname" size="20"></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">�Ա�</td>
      <td><select size="1" name="sex">
          <option selected value="0">��</option>
          <option value="1">Ů</option>
        </select></td>
    </tr>
    <tr>
      <td bgcolor="#CEE7FF">Email</td>
      <td><input type="text" name="email" size="40"></td>
    </tr>
  </table>
  <p align="center"><input type="submit" value=" �� �� " name="B1"><input type="reset" value=" �� д " name="B2"></p>
</form>

</body>

</html>

