<?PHP
	class voteip
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
	
		function exists($ip)
		{
		    
		$strSql="Select * From voteip Where IP='". $ip ."'";
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
	
		// 插入新记录
		function insert()
		{
			$sql = "INSERT INTO VoteIP(IP) VALUES('" . $this->IP . "')";
			$this->conn->query($sql);
		}

		// 删除所有的投票IP
		function deleteAll() {
			$sql = "DELETE FROM VoteIP";
			$this->conn->query($sql);
		}
	}
?>