<?PHP include('isAdmin.php'); ?>
<html>
<head>
<title>�༭������Ϣ</title>
<link href=../style.css rel=STYLESHEET type=text/css>
<script language="javascript">
  function checkFields()
  {
    if (myform.title.value=="") {
       alert("������Ŀ����Ϊ��");
       myform.title.onfocus();
       return false;
    }
    if (myform.content.value=="") {
       alert("�������ݲ���Ϊ��");
       myform.content.onfocus();
       return false;
    }
    return true;
  }
</script>
</head>
<body>

<?PHP 
	include('..\Class\News.php');
	//�����ݿ���ȡ�ô�������Ϣ
	$ns = new News();
	//����id��ʾ���ű��
	$id=$_GET["id"];
	$results = $ns->GetNewsInfo($id);
	$exist = false;	// �ж��Ƿ����
	if($row = $results->fetch_row()) {
		$exist = true;
?>
<form name="myform" method="POST" action="NewsSave.php?action=edit&id=<?PHP   echo($id); ?>" OnSubmit="return checkFields()"> 
      <table border="0" width="100%" cellspacing="1">
          <tr>
            <td width="100%">���ű��� 
            <input type="text" name="title" size="20" value="<?PHP   echo($row[1]); ?>"></td>
          </tr>
          <tr>
            <td width="100%">��������</td>
          </tr>
          <tr>
            <td width="100%"><textarea rows="12" name="content" cols="55"><?PHP   echo($row[2]); ?></textarea></td>
          </tr>
        </table>
        <p align="center"><input type="submit" value=" �� �� " name="B1">
        <input type="reset" value=" ��д " name="B2"></p>
</form>
<?PHP
	} 
	else  {
		echo("û�д�����");
	}
?>
</body>
</html>
