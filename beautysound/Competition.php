<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=style.css rel=STYLESHEET type=text/css>
<style type="text/css">
<!--
.STYLE1 {font-size: medium}
-->
</style>
</head>
<script language="javascript">
function newswin(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=200,top=200";
  oth = oth+",width=600,height=500";
  var newswin=window.open(url,"newswin",oth);
  newswin.focus();
  return false;
}
</script>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
<p>
<p>
<p>
<p>
<p>
  <?PHP 
	// ��ȡ��ǰ�������Ϣ,m=0-ѧԱ��Ϣ��m=1-��ʦ��Ϣ��
	$flg=$_GET["p"];
	if($flg==1)
	{
?>
<p>
<p>
<h1>赛制信息</h1>
<p>&nbsp;</p>
<h2>中国好声音赛制信息</h2>
<li class="STYLE1">第一阶段，“导师盲选”：这是最初的学员选拔阶段，明星导师仅选择声音，不受其他任何因素的干扰。这一环节在考验学员唱功的同时，更是多位明星导师决判力的大比拼。当然，即便在这一阶段没有被导师选中也不用着急，学员可以在训练营继续接受培训，等待下一次机遇。这个阶段将盲选出56位优秀学员。</li>

<span class="STYLE1"></span>
<li class="STYLE1">第二阶段，“导师抉择”：四位明星导师选出自己的门下弟子后，将会对其进行专门培训，最终弟子们将会同台演出，谁能成为优秀学员，就得看在导师门下学习的日子里，谁的潜力能够得到充分的挖掘。
这个阶段通过两两对决选出16强选手。</li>

<span class="STYLE1"></span>
<li class="STYLE1">第三阶段，“导师对战”：这是对四位明星导师“教学能力”的一次考验，经过相同时间的培训后，谁的学生发挥得更好，也会在舞台上见分晓。
这个阶段每位导师旗下的4为选手PK，最终产生4强。</li>
<span class="STYLE1"></span>
<li class="STYLE1">第四阶段，“年度盛典”：所有导师和学员将会进行一次大型演唱会，在这场盛典中，学员们将会首次面对大舞台演出的考验，他们的音乐才华，也将接受所有观众的共同检验。</li>
<br>
</p>

	  <?PHP } 
	 else
	 {  ?>
	  <h1>&nbsp;</h1>
	  <h1>&nbsp;</h1>
	  <h1>比赛结果</h1>
	  <tr>
        <td bgcolor="#FFFFFF">  <a href='CompetitionInfromation.php' onClick="return newswin(this.href)">海选</a></td>	  
</tr>
		<?PHP
		}
		?>
</body>
</html>