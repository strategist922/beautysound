<?PHP 
	include('isUser.php');
	$UserId=trim($_SESSION["UserName"]);
	$Pwd=trim($_SESSION["UserPwd"]);
?>
<?PHP
	include('Class\VoteIP.php');
	$objIP = new VoteIP();
	if($objIP->exists($UserId))  {
		echo("���Ѿ�Ͷ��Ʊ�ˣ������ظ�ͶƱ��");
	}
	else {
		$objIP->insert($UserId);
		// ͶƱ��Ŀ������1
		$ids = $_GET["cid"];
		include('Class\Student.php');
		$students = new Student();
		$students->updateCount($ids);
		echo("�ѳɹ�ͶƱ");
	}
?>
<script language=javascript>
  setTimeout("window.close()",800);
opener.location.reload();
</script>