<?PHP
	class VoteIP
	{
		

		public $IP;		// 用户名	
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

		// 判断指定IP是否存在
		function exists($_ip)
		{
			$result = $this->conn->query("SELECT * FROM VoteIP WHERE IP='" . $_ip . "'");
			if($row = $result->fetch_row()) 
				return true;
			else
				return false;
		}
		
		// 插入新记录
		function insert()
		{
			$sql = "INSERT INTO VoteIP VALUES('" . $this->IP . "')";
			$this->conn->query($sql);
		}

		// 删除所有的投票IP
		function deleteAll() {
			$sql = "DELETE FROM VoteIP";
			$this->conn->query($sql);
		}
	}
?>