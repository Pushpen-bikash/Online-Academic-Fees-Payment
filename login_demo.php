<?php 
session_start();
require 'login_demo_html.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	//$usernam=trim($_POST['username']);
	$ac_no=trim($_POST['account_no']);

	$_SESSION['account_no']=$ac_no;
    //$_SESSION['username']=$username;
	class login
	{
		protected $name;
		protected $account_no;
		protected $password;
        protected $conn;

        function __construct()
	    {
		     try {
			$this->conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		          } catch (PDOException $e) {
			echo 'ERROR: '.$e->getMessage();
		       }
	    }
		public function get_value()
		{
			$this->name=trim($_POST['username']);
			$this->account_no=trim($_POST['account_no']);
			$this->password=trim($_POST['password']);
		}

		public function login_to()
		{ 
            $stmt1=$this->conn->prepare('SELECT *FROM users');
	        $stmt1->execute();

              while(true){

  	$a=1; $b=1; $c=1;
	while ($row=$stmt1->fetch(PDO::FETCH_ASSOC)){
		//$a=1; $b=1; $c=1;

		if ($this->account_no==$row['account_no']) {
			$a=0;
			if ($this->name==$row['name']) {
				$b=0;
				if ($this->password==$row['password']) {
					$c=0;
					break;
				}else{
					echo "Provide a valid Password";
					break;
				}
			}else{
				echo "Provide a vali Username";
				break;
			}
		}
	}
    

	if ($a==0 && $b==0 && $c==0) {
		header("Location:payment.php");
		break;
	}else if($a==1){
		echo "Incorrect Account No;";
		break;
	}
	else{
		break;
	}

}


        } //end of login_to()
	        
    
    }  //end of class

        $db = new login();
        $db->get_value();
        $db->login_to();
        
       
}

 ?>