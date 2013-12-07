<?PHP 
	//本类用于保存对表Person的数据库访问操作
	//表的每个字段对应类的一个成员变量
Class chusai
{
	public $studentname; //学员名
	public $tutorname;//导师
	public $describ; //导师评语
	public $score; //得分
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

	

	//获取所有个人信息
	function Getchusailist()
	{
		//设置查询的SELECT语句
		$sql="SELECT * FROM chusai Order By score DESC";
		//打开记录集
		$results = $this->conn->query($sql);
		return $results;
	} 
}
?>
