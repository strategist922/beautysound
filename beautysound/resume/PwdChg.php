<?PHP 
	include('isUser.php');
	$UserId=trim($_SESSION["UserName"]);
	$Pwd=trim($_SESSION["UserPwd"]);
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>修改密码</title>
</head>
<script Language="JavaScript">
function ChkFields() {
	if (document.myform.orgpwd.value=='') {		
		window.alert ("请输入原始密码！")
		return false
	}
	if (document.myform.pwd.value.length<6) {		
		window.alert ("新密码长度大于等于6！")
		myform.pwd.focus()
		return false
	}
	if (document.myform.pwd.value=='') {		
		window.alert ("请输入新密码！")
		myform.pwd.focus()
		return false
	}
	if (document.myform.pwd1.value=='') {		
		window.alert ("请确认新密码！")
		myform.pwd1.focus()
		return false
	}
	if (document.myform.pwd.value!=document.myform.pwd1.value) {		
		window.alert ("两次输入的新密吗必须相同！")
		return false
	}
	return true
}
</script>
<body>
<form method="POST" action="PwdEdit.php?uid=<?PHP echo $UserId; ?>" name="myform" onSubmit="return ChkFields()">
<h3><p align="center">修改密码</p></h3>
<table align="center" border="1" cellpadding="1" cellspacing="1" width="80%" bordercolor="#008000" bordercolordark="#FFFFFF">
      <tr>
        <td align=left>用户名</td>
		<td><?PHP echo $UserId; ?></td>
	  </tr>
	  <tr>
	    <td align=left>原始密码</td>
        <td><input type="password" name="orgpwd"></td>
      </tr>
	  <tr>
	    <td align=left>新密码</td>
        <td><input type="password" name="pwd"></td>
      </tr>
	  <tr>
	    <td align=left>密码确认</td>
        <td><input type="password" name="pwd1"></td>
      </tr>
  </table> 
<p align="center">
<input type="submit" value=" 提 交 " name="B2"></p>
</form>  
</body>
</html>
