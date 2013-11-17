<?PHP include('isAdmin.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻信息</title>
<link href=../style.css rel=STYLESHEET type=text/css>
<script language="javascript">
function checkFields() {
  if (myform.title.value=="") {
    alert("新闻题目不能为空");
    myform.title.onfocus();
    return false;
  }
  if (myform.content.value=="") {
    alert("新闻内容不能为空");
    myform.content.onfocus();
    return false;
  }
  return true;
}
</script>
</head>
<body>
<form name="myform" method="POST" action="NewsSave.php?action=add" OnSubmit="return checkFields()">
        <table border="0" width="100%" cellspacing="1">
          <tr>
            <td width="100%">新闻标题
            <input type="text" name="title" size="30"></td>
          </tr>
          <tr>
            <td width="100%">新闻内容</td>
          </tr>
          <tr>
            <td width="100%"><textarea rows="12" name="content" cols="55"></textarea></td>
          </tr>
        </table>
        <p align="center"><input type="submit" value=" 提 交 " name="B1">
        <input type="reset" value=" 重写 " name="B2"></p>
      </form>
</body>
</html>
