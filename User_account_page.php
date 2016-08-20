<?php 
session_start();

if (!isset($_SESSION['account_no'])) {
	header('location: login_demo.php');
	die();

}
else{
	
      $a=$_SESSION['account_no'];	
     }
//require 'user_account_html.php';
if(isset($_POST['get']))
{
	$ac_no=trim($_POST['account_no']);

	   try {
			$conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		          } catch (PDOException $e) {
			echo 'ERROR: '.$e->getMessage();
		       }
            
            $sql="select balance from users where account_no=$ac_no";
		    $stmt1=$conn->prepare($sql);
	        $stmt1->execute();

	        while ($row=$stmt1->fetch(PDO::FETCH_ASSOC))
	   	    echo 'Your account Balance is:'.$row['balance'];
	        	//$z=$row['balance'];
	        //echo '<p style="color:green;position:fixed;top:0px;left:0px;">Your account Balance is:</p>'.$row['balance'];
}// End of if

else if(isset($_POST['deposit']))
{
   $amount=trim($_POST['balance']);

   try {
			$conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		          } catch (PDOException $e) {
			echo 'ERROR: '.$e->getMessage();
		       }
               
            
            $sql1="select balance from users where account_no=$a";
            $stmt3=$conn->prepare($sql1);
	        $stmt3->execute();
	        while ($row=$stmt3->fetch(PDO::FETCH_ASSOC))
	   	    $balance=$row['balance'];
            $remain=$balance+$amount;


		       $sql2="update users set balance=$remain where account_no=$a";
		       $stmt=$conn->prepare($sql2);
               $stmt->execute();
               echo '<p style="font-family:arial;color:green;font-size:20px;position:fixed;top:97px;left:470px;">Successfully Deposited</p>';
}
else
{
	echo '<p style="font-family:arial;color:red;font-size:20px;position:fixed;top:97px;left:470px;">Try With The Account No Given In Field</p>';
}

include 'user_account_html.php';
 ?>
