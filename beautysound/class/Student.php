<?PHP 
	//本类用于保存对表Student的数据库访问操作
	//表的每个字段对应类的一个成员变量
Class Student
{
	
	Public $RealName; //真实姓名
	public $Pwd;
	Public $Sex; //性别
	Public $Birth; //出生日期
	public $Nature; //民族
	public $Married; //婚姻状况
	public $Education; //学历
	public $College; //毕业学校
	public $Email; //电子邮件
	public $describe;
	public $tutors;
	public $votecount;
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
	function updateCount($name) {
			$sql = "UPDATEStudent SET votecount=votecount+1 WHERE RealName IN (" .$name . ")";
			$this->conn->query($sql);
		}
     function GetCount()
	{
		$count = 0;
		//设置查询的SELECT语句
		$sql="SELECT Count(*) FROM Student";
		//打开记录集
		$results = $this->conn->query($sql);
		if($row = $results->fetch_row())  {
			$count = intval($row[0])-1;  // 不考虑Admin用户
		}
		return $count;
	} 
	function GetCompany($PageNo, $PageSize)
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Student Order By PostDate DESC LIMIT " . ($PageNo-1)*$PageSize . "," .  $PageSize;
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 
function GetStudentSearch($schsql)
	{
		$results = $this->conn->query($schsql);
		return $results;
	} 

	//读取单个个人信息
	function GetPersonInfo($uname)
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Student WHERE RealName='".$uname."'";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	}  
	function GetPersonlist()
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM Student Order By PostTime DESC";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 

	//获取所有个人信息

	//插入个人信息
	function InsertPerson()
	{
		$strSql="Insert Into Student Values('" . $this->RealName . "','" . $this->Sex . "','" . $this->Birth . "','"  . $this->Nature . "','" . $this->Married  . "','" . $this->Education . "','" . $this->College  . $this->Email . "','" . $this->describe . "','" . $this->PostTime . "')";
		//执行INSERT语句
		$this->conn->query($strSql);
	}	 

	//修改个人信息
	function UpdatePerson($uname)
	{
		$strSql="Update Student Set RealName='" . $this->RealName . "',Sex='" . $this->Sex . "',Birth='" .  $this->Birth  . "',Nature='" . $this->Nature . "',Married='" . $this->Married. "',Education='" . $this->Education . "',College='" . $this->College. "',Email='" . $this->Email . "',describe='" . $this->describe . "' Where UserName='" . $uname."'";
		//执行UPDATE语句
		$this->conn->query($strSql);
	}
	
	//删除个人信息
	function DeletePerson($uname)
	{
		$strSql="Delete From Student Where RealName='".$uname."'";
		//执行DELETE语句
		$this->conn->query($strSql);
	}


	//判断指定的个人名称是否存在
function HaveUser()
	{
		$strSql="Select * From Student Where RealName='" . $this->RealName . "' And Pwd='" . $this->Pwd . "'";
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
		$strSql="Select * From Student Where RealName='".$uname."'";
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
