<?PHP include('isUser.php'); ?>
<html>
<head>
<title>�༭������Ϣ</title>
<link rel="stylesheet" href="../style.css">
<Script Language="JavaScript">
function CheckFlds(){
if (document.form1.realname.value==""){
   alert("��������ʵ������");
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
      <td width="20%" bgcolor="#eeeeee">�û���</td>
      <td width="80%"><?PHP   echo($_SESSION["UserName"]); ?></td>
    </tr>
    <tr>
      <td bgcolor="#eeeeee">��ʵ����</td>
      <td><input type="text" name="realname" size="20" value="<?PHP   echo($row[2]); ?>"></td>
    </tr>
    <tr>
      <td bgcolor="#eeeeee">�Ա�</td>
      <td><select size="1" name="sex">
       <?PHP   if ($row[3])
  {
?>
          <option value="0">��</option>
          <option value="1" selected>Ů</option>
       <?PHP   }
    else
  {
?>
          <option selected value="0">��</option>
          <option value="1">Ů</option>
       <?PHP   } ?>
        </select></td>
    </tr>		
    <tr>
      <td bgcolor="#eeeeee">Email</td>
      <td><input type="text" name="email" size="20"  value="<?PHP   echo($row[4]); ?>"></td>
    </tr>
  </table>
  <p align=left><input type="submit" value=" �� �� " name="B1">
  <input type="reset" value=" �� д " name="B2"></p>
</form>
<?PHP } ?>
</body>

</html>
