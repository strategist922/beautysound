<?PHP 
	//�������ڱ���Ա�News�����ݿ���ʲ���
	//���ÿ���ֶζ�Ӧ���һ����Ա����
Class News
{
	public $NewsId; //���ű��
	Public $NTitle; //������Ŀ
	Public $NContent; //����
	Public $PostTime; //�ύʱ��
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
	function GetNewsInfo($nid)
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM News WHERE NewsId=".$nid;
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 

	//��ȡ����������Ϣ
	function GetNewslist()
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM News Order By PostTime DESC";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 

	//����������Ϣ
	function InsertNews()
	{
		$strSql="Insert Into News (NTitle, NContent, PostTime) Values('" . $this->NTitle . "','" . $this->NContent . "','" . $this->PostTime . "')";
		//ִ��INSERT���
		$this->conn->query($strSql);
	}
	
	//�޸�������Ϣ
	function UpdateNews($nid)
	{
		$strSql="Update News Set NTitle='" . $this->NTitle . "',NContent='" . $this->NContent . "' Where NewsId=" . $nid;
		//ִ��INSERT���
		$this->conn->query($strSql);
	} 

	//ɾ��������Ϣ
	function DeleteNews($nids)
	{
		$strSql="Delete From News Where NewsId In (" . $nids . ")";
		//ִ��INSERT���
		$this->conn->query($strSql);
	} 
}
?>
