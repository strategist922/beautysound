<?PHP 
	//�������ڱ���Ա�Student�����ݿ���ʲ���
	//���ÿ���ֶζ�Ӧ���һ����Ա����
Class Tutor
{
	
	Public $RealName; //��ʵ����
	public $Pwd;
	Public $Sex; //�Ա�
	Public $bestsong;
	public $describe;
	public $PostTime; //�ύʱ��
	var $conn;

    function __construct() {
		// �������ݿ�
		$this->conn = mysqli_connect("localhost", "root", "", "beautysound"); 
		mysqli_query($this->conn, "SET NAMES utf8");
	}
		
	function __destruct() {
		// �ر�����
		mysqli_close($this->conn);
    }

	//��ȡ����������Ϣ
	function GetPersonInfo($uname)
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Tutor WHERE RealName='".$uname."'";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 

	//��ȡ���и�����Ϣ
   function GetPersonlist()
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Tutor Order By PostTime DESC";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 
	//���������Ϣ
	function InsertPerson()
	{
		$strSql="Insert Into Tutor Values('" . $this->RealName . "','" . $this->Sex .  "','" . $this->bestsong . "','" . $this->describe . "')";
		//ִ��INSERT���
		$this->conn->query($strSql);
	}	 

	//�޸ĸ�����Ϣ
	function UpdatePerson($uname)
	{
		$strSql="Update Tutor Set describe='" . $this->describe . "',Sex='" . $this->Sex . "',Birth='" .  $this->Birth  . "',bestsong='" . $this->bestsong . "' Where RealName='" . $uname."'";
		//ִ��UPDATE���
		$this->conn->query($strSql);
	}
	
	//ɾ��������Ϣ
	function DeletePerson($uname)
	{
		$strSql="Delete From Tutor Where RealName='".$uname."'";
		//ִ��DELETE���
		$this->conn->query($strSql);
	}

	//���¸����û�����
    function UpdatePassword()
	{
		$strSql="Update Tutor Set Pwd='" . $this->UserPwd . "' Where RealName='" . $this->UserName . "'";
		//ִ��UPDATE���
		$this->conn->query($strSql);
	}
	//�ж�ָ���ĸ��������Ƿ����
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
	//�ж�ָ���ĸ��������Ƿ����
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
