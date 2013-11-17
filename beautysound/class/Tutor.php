<?PHP 
	//本类用于保存对表Student的数据库访问操作
	//表的每个字段对应类的一个成员变量
Class Tutor
{
	
	Public $RealName; //真实姓名
	public $Pwd;
	Public $Sex; //性别
	Public $bestsong;
	public $describe;
	public $PostTime; //提交时间
	var $conn;

    function __construct() {
		// 连接数据库
		$this->conn = mysqli_connect("localhost", "root", "", "beautysound"); 
		mysqli_query($this->conn, "SET NAMES utf8");
	}
		
	function __destruct() {
		// 关闭连接
		mysqli_close($this->conn);
    }

	//读取单个个人信息
	function GetPersonInfo($uname)
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Tutor WHERE RealName='".$uname."'";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 

	//获取所有个人信息
   function GetPersonlist()
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Tutor Order By PostTime DESC";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 
	//插入个人信息
	function InsertPerson()
	{
		$strSql="Insert Into Tutor Values('" . $this->RealName . "','" . $this->Sex .  "','" . $this->bestsong . "','" . $this->describe . "')";
		//执行INSERT语句
		$this->conn->query($strSql);
	}	 

	//修改个人信息
	function UpdatePerson($uname)
	{
		$strSql="Update Tutor Set describe='" . $this->describe . "',Sex='" . $this->Sex . "',Birth='" .  $this->Birth  . "',bestsong='" . $this->bestsong . "' Where RealName='" . $uname."'";
		//执行UPDATE语句
		$this->conn->query($strSql);
	}
	
	//删除个人信息
	function DeletePerson($uname)
	{
		$strSql="Delete From Tutor Where RealName='".$uname."'";
		//执行DELETE语句
		$this->conn->query($strSql);
	}

	//更新个人用户密码
    function UpdatePassword()
	{
		$strSql="Update Tutor Set Pwd='" . $this->UserPwd . "' Where RealName='" . $this->UserName . "'";
		//执行UPDATE语句
		$this->conn->query($strSql);
	}
	//判断指定的个人名称是否存在
   function HaveUser()
	{
		$strSql="Select * From Tutor Where RealName='" . $this->RealName . "' And Pwd='" . $this->Pwd . "'";
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
		$strSql="Select * From Tutor Where RealName='".$uname."'";
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
