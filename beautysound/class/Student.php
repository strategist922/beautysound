<?PHP 
	//�������ڱ���Ա�Student�����ݿ���ʲ���
	//���ÿ���ֶζ�Ӧ���һ����Ա����
Class Student
{
	
	Public $RealName; //��ʵ����
	public $Pwd;
	Public $Sex; //�Ա�
	Public $Birth; //��������
	public $Nature; //����
	public $Married; //����״��
	public $Education; //ѧ��
	public $College; //��ҵѧУ
	public $Email; //�����ʼ�
	public $describe;
	public $tutors;
	public $votecount;
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
	function updateCount($name) {
			$sql = "UPDATEStudent SET votecount=votecount+1 WHERE RealName IN (" .$name . ")";
			$this->conn->query($sql);
		}
     function GetCount()
	{
		$count = 0;
		//���ò�ѯ��SELECT���
		$sql="SELECT Count(*) FROM Student";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		if($row = $results->fetch_row())  {
			$count = intval($row[0])-1;  // ������Admin�û�
		}
		return $count;
	} 
	function GetCompany($PageNo, $PageSize)
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Student Order By PostDate DESC LIMIT " . ($PageNo-1)*$PageSize . "," .  $PageSize;
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 
function GetStudentSearch($schsql)
	{
		$results = $this->conn->query($schsql);
		return $results;
	} 

	//��ȡ����������Ϣ
	function GetPersonInfo($uname)
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Student WHERE RealName='".$uname."'";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	}  
	function GetPersonlist()
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM Student Order By PostTime DESC";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 

	//��ȡ���и�����Ϣ

	//���������Ϣ
	function InsertPerson()
	{
		$strSql="Insert Into Student Values('" . $this->RealName . "','" . $this->Sex . "','" . $this->Birth . "','"  . $this->Nature . "','" . $this->Married  . "','" . $this->Education . "','" . $this->College  . $this->Email . "','" . $this->describe . "','" . $this->PostTime . "')";
		//ִ��INSERT���
		$this->conn->query($strSql);
	}	 

	//�޸ĸ�����Ϣ
	function UpdatePerson($uname)
	{
		$strSql="Update Student Set RealName='" . $this->RealName . "',Sex='" . $this->Sex . "',Birth='" .  $this->Birth  . "',Nature='" . $this->Nature . "',Married='" . $this->Married. "',Education='" . $this->Education . "',College='" . $this->College. "',Email='" . $this->Email . "',describe='" . $this->describe . "' Where UserName='" . $uname."'";
		//ִ��UPDATE���
		$this->conn->query($strSql);
	}
	
	//ɾ��������Ϣ
	function DeletePerson($uname)
	{
		$strSql="Delete From Student Where RealName='".$uname."'";
		//ִ��DELETE���
		$this->conn->query($strSql);
	}


	//�ж�ָ���ĸ��������Ƿ����
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

	//�ж�ָ���ĸ��������Ƿ����
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
