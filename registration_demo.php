<?php 
session_start();
require 'Registration_demo_html.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$a=trim($_POST['roll']);
	$b=trim($_POST['password']);
      	class Database
{
	protected $conn;

	protected $name;
	protected $roll;
	protected $balance;
	protected $dept;
	protected $password;

	function __construct()
	{
		try {
			$this->conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'ERROR: '.$e->getMessage();
		}
	}

	public function get_data_from_form_field()
	{
		$this->name=trim($_POST['username']);
		$this->roll=trim($_POST['roll']);
		$this->balance=trim($_POST['balance']);
		$this->dept=trim($_POST['dept']);
		$this->password=trim($_POST['password']);
	}

	public function insert_to_db()
	{
       $stmt2=$this->conn->prepare('INSERT INTO users (name, roll, balance, dept, password) VALUES (:name, :roll, :balance, :dept, :password)');

       $stmt2->bindParam(':name',     $this->name, PDO::PARAM_STR);
       $stmt2->bindParam(':roll',     $this->roll, PDO::PARAM_INT);
       $stmt2->bindParam(':balance',  $this->balance, PDO::PARAM_INT);
       $stmt2->bindParam(':dept',     $this->dept, PDO::PARAM_STR);
       $stmt2->bindParam(':password', $this->password, PDO::PARAM_STR);
    
       $stmt2->execute();
       //echo $stmt2->rowCount();
	}
	public function get_account_no()
	{
       $sql="select account_no from users where roll=$this->roll";
	   $stmt1=$this->conn->prepare($sql);
	   $stmt1->execute();
	   while ($row=$stmt1->fetch(PDO::FETCH_ASSOC))
	   	echo 'Your account number is: '.$row['account_no'];
	}
}

$db = new Database();

$db->get_data_from_form_field();

try {
	$db->insert_to_db();
	echo "Your account is created successfully<br>";
	$db->get_account_no();
} catch (PDOException $e) {
	    $error=strval($e->getMessage());
	//if($error=="Fatal error: Uncaught exception 'PDOException' with message 'SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '$a' for key 'roll'' in C:\xampp\htdocs\Project_Demo\registration_demo.php:47 Stack trace: #0 C:\xampp\htdocs\Project_Demo\registration_demo.php(47): PDOStatement->execute() #1 C:\xampp\htdocs\Project_Demo\registration_demo.php(55): Database->insert_to_db() #2 {main} thrown in C:\xampp\htdocs\Project_Demo\registration_demo.php on line 47");
    //echo 'duplicate roll';

	//if($error==="SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '&a' for key 'roll'")
	//echo 'duplicate roll';

    //if($error==="SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '$b' for key 'password'")
    //echo 'duplicte password';
    //echo $error;
    echo $e->getMessage();
	  
}
}
 ?>