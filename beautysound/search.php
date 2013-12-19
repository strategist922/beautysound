<html>
<head>
<title>学员查询</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href=style.css rel=STYLESHEET type=text/css>
<style type="text/css">
<!--
.STYLE1 {font-size: medium}
.STYLE2 {
	font-size: large;
	color: #000066;
}
.STYLE3 {color: #000066}
-->
</style>
</head>
<body>
<form method="POST" action="SearchRlt.php">
  <table border="0" width="700" align=center>
    <tr>
     <td  valign="top">
    <table border="0" width="100%" cellspacing="4" cellpadding="0" bordercolorlight="#A4A4FF" bordercolordark="#FFFFFF">     
     <tr>
      <td width="100%" colspan="2" align="center"></td>
     </tr>
     <tr>      </tr>
     <p>&nbsp;</p>     <tr>
       <td width="100%" colspan="2" align="center"><span class="STYLE2">学员查询</span></td>
    </tr>
     <tr>
      <td width="100%" colspan="2">&nbsp;</td>
    </tr>
     <tr>
<form method="POST" action="SearchRlt.php">
      <td width="50%" align="center"><span class="STYLE3 STYLE1">查询条件</span></td>
      <td width="50%"><select size="1" name="slt">
          <option selected value="title">姓名</option>
          <option value="sex">性别</option>
          <option value="nature">民族</option>
          <option value="colledge">大学</option>
		   <option value="describe">个人描述</option>
        </select></td>
    </tr>
    <tr>
      <td width="50%" align="center"><span class="STYLE3 STYLE1">关键字</span></td>
      <td width="50%"><input type="text" name="key" size="20"></td>
    </tr>
    <tr>
      <td width="100%" colspan="2">
        <p align="center"><input type="submit" value=" 提交" name="B1"> 
        <input type="reset" value=" 重写 " name="B2"></td>
    </tr>
</form>
        </table>
    </td>
    </tr>
  </table>
  <p align="center"><a href="javascript:window.close()">[关闭]</a></p>
</body>
</html>

