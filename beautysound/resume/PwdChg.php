<?PHP 
	include('isUser.php');
	$UserId=trim($_SESSION["UserName"]);
	$Pwd=trim($_SESSION["UserPwd"]);
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>�޸�����</title>
</head>
<script Language="JavaScript">
function ChkFields() {
	if (document.myform.orgpwd.value=='') {		
		window.alert ("������ԭʼ���룡")
		return false
	}
	if (document.myform.pwd.value.length<6) {		
		window.alert ("�����볤�ȴ��ڵ���6��")
		myform.pwd.focus()
		return false
	}
	if (document.myform.pwd.value=='') {		
		window.alert ("�����������룡")
		myform.pwd.focus()
		return false
	}
	if (document.myform.pwd1.value=='') {		
		window.alert ("��ȷ�������룡")
		myform.pwd1.focus()
		return false
	}
	if (document.myform.pwd.value!=document.myform.pwd1.value) {		
		window.alert ("��������������������ͬ��")
		return false
	}
	return true
}
</script>
<body>
<form method="POST" action="PwdEdit.php?uid=<?PHP echo $UserId; ?>" name="myform" onSubmit="return ChkFields()">
<h3><p align="center">�޸�����</p></h3>
<table align="center" border="1" cellpadding="1" cellspacing="1" width="80%" bordercolor="#008000" bordercolordark="#FFFFFF">
      <tr>
        <td align=left>�û���</td>
		<td><?PHP echo $UserId; ?></td>
	  </tr>
	  <tr>
	    <td align=left>ԭʼ����</td>
        <td><input type="password" name="orgpwd"></td>
      </tr>
	  <tr>
	    <td align=left>������</td>
        <td><input type="password" name="pwd"></td>
      </tr>
	  <tr>
	    <td align=left>����ȷ��</td>
        <td><input type="password" name="pwd1"></td>
      </tr>
  </table> 
<p align="center">
<input type="submit" value=" �� �� " name="B2"></p>
</form>  
</body>
</html>
