<?PHP 
	//本类用于保存对表News的数据库访问操作
	//表的每个字段对应类的一个成员变量
Class News
{
	public $NewsId; //新闻编号
	Public $NTitle; //新闻题目
	Public $NContent; //内容
	Public $PostTime; //提交时间
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

	//读取单个新闻信息
	function GetNewsInfo($nid)
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM News WHERE NewsId=".$nid;
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 

	//获取所有新闻信息
	function GetNewslist()
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM News Order By PostTime DESC";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 

	//插入新闻信息
	function InsertNews()
	{
		$strSql="Insert Into News (NTitle, NContent, PostTime) Values('" . $this->NTitle . "','" . $this->NContent . "','" . $this->PostTime . "')";
		//执行INSERT语句
		$this->conn->query($strSql);
	}
	
	//修改新闻信息
	function UpdateNews($nid)
	{
		$strSql="Update News Set NTitle='" . $this->NTitle . "',NContent='" . $this->NContent . "' Where NewsId=" . $nid;
		//执行INSERT语句
		$this->conn->query($strSql);
	} 

	//删除新闻信息
	function DeleteNews($nids)
	{
		$strSql="Delete From News Where NewsId In (" . $nids . ")";
		//执行INSERT语句
		$this->conn->query($strSql);
	} 
}
?>
