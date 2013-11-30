<?PHP 
Class Person
{
	public $UserName; //用户名
	Public $UserPwd; //密码
	Public $RealName; //真实姓名
	Public $Sex; //性别
	public $Email; //电子邮件
	public $PostTime; //提交时间
	var $conn;

    function __construct() {
		// 连接数据库
		$this->conn = mysqli_connect("localhost", "root", "", "beautysound"); 
		mysqli_query($this->conn, "SET NAMES gbk");
	}
		
	function __destruct() {
		// 关闭连接
		mysqli_close($this->conn);
    }
	//读取单个个人信息
	function GetPersonInfo($uname)
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Person WHERE UserName='".$uname."'";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 

	//获取所有个人信息
	function GetPersonlist()
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Person Order By PostTime DESC";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 

	//插入个人信息
	function InsertPerson()
	{
		$strSql="Insert Into Person Values('" . $this->UserName . "','" . $this->UserPwd . "','" . $this->RealName . "','" . $this->Sex . "','" . $this->Email . "','" . $this->PostTime . "')";
		//执行INSERT语句
		$this->conn->query($strSql);
	}	 

	//修改个人信息
	function UpdatePerson($uname)
	{
		$strSql="Update Person Set RealName='" . $this->RealName . "',Sex='" . $this->Sex . "',Email='" . $this->Email . "' Where UserName='" . $uname."'";
		//执行UPDATE语句
		$this->conn->query($strSql);
	}
	
	//删除个人信息
	function DeletePerson($uname)
	{
		$strSql="Delete From Person Where UserName='".$uname."'";
		//执行DELETE语句
		$this->conn->query($strSql);
	}

	//更新个人用户密码
	function UpdatePassword()
	{
		$strSql="Update Person Set UserPwd='" . $this->UserPwd . "' Where UserName='" . $this->UserName . "'";
		//执行UPDATE语句
		$this->conn->query($strSql);
	}

	//判断指定的个人名称是否存在
	function HaveUser()
	{
		$strSql="Select * From Person Where UserName='" . $this->UserName . "' And UserPwd='" . $this->UserPwd . "'";
		$results = $this->conn->query($strSql);
		if ($row = $results->fetch_row())
		{
			$exist=true;
		}
		else
		{
			$exist=false;
		} 
		return $exist;
	} 

	//判断指定的个人名称是否存在
	function HavePerson($uname)
	{
		$strSql="Select * From Person Where UserName='".$uname."'";
		$results = $this->conn->query($strSql);
		if ($row = $results->fetch_row())
		{
			$exist=true;
		}
		else
		{
			$exist=false;
		} 
		return $exist;
	} 
}
?>
