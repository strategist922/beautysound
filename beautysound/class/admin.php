<?PHP 
//�������ڱ���Ա�Admin�����ݿ���ʲ���
//���ÿ���ֶζ�Ӧ���һ����Ա����
Class Admin
{
  public $AdminID; //����Ա��
  Public $AdminPwd; //����
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

  //��ȡ��������Ա��Ϣ
  function GetAdminInfo($aid)
  {
    //���ò�ѯ��SELECT���
    $sql="SELECT * FROM Admin WHERE AdminID='".$aid."'";
	//�򿪼�¼��
    $results = $this->conn->query($sql);
	return $results;
  } 

  //��ȡ���й���Ա��Ϣ
  function GetAdminlist()
  {
	//���ò�ѯ��SELECT���
    $sql="SELECT * FROM Admin Order By AdminID";
    //�򿪼�¼��
    $results = $this->conn->query($sql);
	return $results;
  } 

  //�ж��Ƿ����ָ������Ա��Ϣ
  function GetAdmin()
  {
	//���ò�ѯ��SELECT���
    $sql="SELECT * FROM Admin WHERE AdminID='".$this->AdminID."' And AdminPwd='".$this->AdminPwd."'";
	//�򿪼�¼��
    $results = $this->conn->query($sql);
    //��ȡԱ������
    if ($row = $results->fetch_row())
    {
      return false;
    }
    else
    {
      return true;
    } 
  }

  //�������Ա��Ϣ
  function InsertAdmin()
  {
    $strSql="Insert Into Admin Values('".$this->AdminID."','111111')";
    $this->conn->query($strSql);
  } 

  //ɾ������Ա��Ϣ
  function DeleteAdmin($aid)
  {
    $strSql="Delete From Admin Where AdminID='".$aid."'";
    $this->conn->query($strSql);
  } 

  //�޸Ĺ���Ա����
  function UpdatePassword($aid)
  {
    $strSql="Update Admin Set AdminPwd='".$this->AdminPwd."' Where AdminID='".$aid."'";
    $this->conn->query($strSql);
  } 
}
?>
