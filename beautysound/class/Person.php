<?PHP 
Class Person
{
	public $UserName; //�û���
	Public $UserPwd; //����
	Public $RealName; //��ʵ����
	Public $Sex; //�Ա�
	public $Email; //�����ʼ�
	public $PostTime; //�ύʱ��
	var $conn;

    function __construct() {
		// �������ݿ�
		$this->conn = mysqli_connect("localhost", "root", "", "beautysound"); 
		mysqli_query($this->conn, "SET NAMES gbk");
	}
		
	function __destruct() {
		// �ر�����
		mysqli_close($this->conn);
    }
	//��ȡ����������Ϣ
	function GetPersonInfo($uname)
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Person WHERE UserName='".$uname."'";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 

	//��ȡ���и�����Ϣ
	function GetPersonlist()
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Person Order By PostTime DESC";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 

	//���������Ϣ
	function InsertPerson()
	{
		$strSql="Insert Into Person Values('" . $this->UserName . "','" . $this->UserPwd . "','" . $this->RealName . "','" . $this->Sex . "','" . $this->Email . "','" . $this->PostTime . "')";
		//ִ��INSERT���
		$this->conn->query($strSql);
	}	 

	//�޸ĸ�����Ϣ
	function UpdatePerson($uname)
	{
		$strSql="Update Person Set RealName='" . $this->RealName . "',Sex='" . $this->Sex . "',Email='" . $this->Email . "' Where UserName='" . $uname."'";
		//ִ��UPDATE���
		$this->conn->query($strSql);
	}
	
	//ɾ��������Ϣ
	function DeletePerson($uname)
	{
		$strSql="Delete From Person Where UserName='".$uname."'";
		//ִ��DELETE���
		$this->conn->query($strSql);
	}

	//���¸����û�����
	function UpdatePassword()
	{
		$strSql="Update Person Set UserPwd='" . $this->UserPwd . "' Where UserName='" . $this->UserName . "'";
		//ִ��UPDATE���
		$this->conn->query($strSql);
	}

	//�ж�ָ���ĸ��������Ƿ����
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

	//�ж�ָ���ĸ��������Ƿ����
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
