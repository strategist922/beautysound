<?PHP 
	//�������ڱ���Ա�Person�����ݿ���ʲ���
	//���ÿ���ֶζ�Ӧ���һ����Ա����
Class haixuan
{
	public $studentname; //ѧԱ��
	public $describ; //��ʦ����
	public $score; //�÷�
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
	//��ȡ���и�����Ϣ
	function Gethaixuanlist()
	{
		//���ò�ѯ��SELECT���
		$sql="SELECT * FROM haixuan Order By score DESC";
		//�򿪼�¼��
		$results = $this->conn->query($sql);
		return $results;
	} 
}
?>
