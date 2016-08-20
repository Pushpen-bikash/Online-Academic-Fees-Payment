<?php 
session_start();

if (!isset($_SESSION['account_no'])) {
	header('location: login_demo.php');
	//echo "Try with the Account No show in the field";
	die();
}
else{
   $ac=$_SESSION['account_no'];
   //echo $_SESSION['username'];
     }
 //include 'payment_html.php';
if($_SERVER['REQUEST_METHOD']=='POST' && trim($_POST['account_no'])==$_SESSION['account_no'])
{

	class transaction_system
	{
		protected $account_no;
		protected $saving_account_no;
		protected $account_name;
		protected $student_name;
		protected $roll_no;
		protected $year;
		protected $dept2;
		protected $transaction_type;
		protected $amount;
		protected $conn;
		
		function __construct()
		{
		    try {
			$this->conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		          } catch (PDOException $e) {
			echo 'ERROR: '.$e->getMessage();
		       }
		} //end of constructor

        public function get_data()
        {
        	$this->account_no=trim($_POST['account_no']);
		    $this->saving_account_no=trim($_POST['saving_account_no']);
		    $this->account_name=trim($_POST['account_name']);
		    $this->transaction_type=trim($_POST['transaction_type']);
		    $this->amount=trim($_POST['amount']);
		    
        }
		
		public function update()
		{

            $sql1="select balance from users where account_no=$this->account_no";
            $stmt3=$this->conn->prepare($sql1);
	        $stmt3->execute();
	        while ($row=$stmt3->fetch(PDO::FETCH_ASSOC))
	   	    $balance=$row['balance'];
            $remain=$balance-$this->amount;
            
            //if($_SESSION['account_no']==$this->account_no){
            if($remain>500)
            {  

			 $stmt4=$this->conn->prepare('INSERT INTO trasaction (account_no, saving_account_no, account_name, transaction_type, ammount) VALUES (:account_no, :saving_account_no, :account_name, :transaction_type, :ammount)');

             $stmt4->bindParam(':account_no',            $this->account_no, PDO::PARAM_INT);
             $stmt4->bindParam(':saving_account_no',     $this->saving_account_no, PDO::PARAM_INT);
             $stmt4->bindParam(':account_name',          $this->account_name, PDO::PARAM_STR);
             $stmt4->bindParam(':transaction_type',      $this->transaction_type, PDO::PARAM_STR);
             $stmt4->bindParam(':ammount',                $this->amount, PDO::PARAM_INT);
             $stmt4->execute();
             
             
             $sql2="update users set balance=$remain where account_no=$this->account_no";
             $stmt5=$this->conn->prepare($sql2);
             $stmt5->execute();

             echo  '<p style="font-family:arial;color:green;font-size:20px;position:fixed;top:30px;left:400px;">Successfully completed your transaction</p>';
             }
             else
             {
             	echo "Insufficient balace to complete the transaction";
             }
            //}//end of first if
             //else
             //{
             	//echo 'Try with the Account No given in the field';
             //}
		} //end of update


	} //end of class

	$ts = new transaction_system();
	$ts->get_data();

	try {

	 $ts->update();	
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	
} //end of main if

else
     {
         echo '<p style="font-family:arial;color:red;font-size:20px;position:fixed;top:30px;left:400px;">DO Transaction By Giving Account No In The Field</p>';
     }

//echo 'welcome';
     $_SESSION['account_no']=$ac;
     include 'payment_html.php';
 ?>

 