<?PHP 
	include('isUser.php');
	$UserId=trim($_SESSION["UserName"]);
	$Pwd=trim($_SESSION["UserPwd"]);
?>
<?PHP
	include('Class\VoteIP.php');
	$objIP = new VoteIP();
	if($objIP->exists($UserId))  {
		echo("你已经投过票了，不得重复投票！");
	}
	else {
		$objIP->insert($UserId);
		// 投票项目数量加1
		$ids = $_GET["cid"];
		include('Class\Student.php');
		$students = new Student();
		$students->updateCount($ids);
		echo("已成功投票");
	}
?>
<script language=javascript>
  setTimeout("window.close()",800);
opener.location.reload();
</script>