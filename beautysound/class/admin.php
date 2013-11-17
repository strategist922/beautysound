<?PHP 
//本类用于保存对表Admin的数据库访问操作
//表的每个字段对应类的一个成员变量
Class Admin
{
  public $AdminID; //管理员名
  Public $AdminPwd; //密码
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

  //读取单个管理员信息
  function GetAdminInfo($aid)
  {
    //设置查询的SELECT语句
    $sql="SELECT * FROM Admin WHERE AdminID='".$aid."'";
	//打开记录集
    $results = $this->conn->query($sql);
	return $results;
  } 

  //获取所有管理员信息
  function GetAdminlist()
  {
	//设置查询的SELECT语句
    $sql="SELECT * FROM Admin Order By AdminID";
    //打开记录集
    $results = $this->conn->query($sql);
	return $results;
  } 

  //判断是否存在指定管理员信息
  function GetAdmin()
  {
	//设置查询的SELECT语句
    $sql="SELECT * FROM Admin WHERE AdminID='".$this->AdminID."' And AdminPwd='".$this->AdminPwd."'";
	//打开记录集
    $results = $this->conn->query($sql);
    //读取员工数据
    if ($row = $results->fetch_row())
    {
      return false;
    }
    else
    {
      return true;
    } 
  }

  //插入管理员信息
  function InsertAdmin()
  {
    $strSql="Insert Into Admin Values('".$this->AdminID."','111111')";
    $this->conn->query($strSql);
  } 

  //删除管理员信息
  function DeleteAdmin($aid)
  {
    $strSql="Delete From Admin Where AdminID='".$aid."'";
    $this->conn->query($strSql);
  } 

  //修改管理员密码
  function UpdatePassword($aid)
  {
    $strSql="Update Admin Set AdminPwd='".$this->AdminPwd."' Where AdminID='".$aid."'";
    $this->conn->query($strSql);
  } 
}
?>
