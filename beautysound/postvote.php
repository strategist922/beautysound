<?PHP
	$ip = $_SERVER["REMOTE_ADDR"];
	include('Class\VoteIP.php');
	$objIP = new VoteIP();
	if($objIP->exists($ip))  {
		echo("���Ѿ�Ͷ��Ʊ�ˣ������ظ�ͶƱ��");
	}
	else {
		$objIP->IP = $ip;
		$objIP->insert();
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