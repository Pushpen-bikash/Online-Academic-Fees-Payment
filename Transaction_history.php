<?php 

session_start();

if (!isset($_SESSION['account_no'])) {
	header('location: login_demo.php');
	die();

}
else{
	
       $a=$_SESSION['account_no'];	
     }
               
                if(isset($_POST['saving_button']))
                {   
                    try {
			         $conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		             } catch (PDOException $e) {
			         echo 'ERROR: '.$e->getMessage();
		             }

                	$sv=trim($_POST['hsn']);
                	$sql="SELECT account_no, saving_account_no, account_name, transaction_type, ammount, TIME FROM trasaction WHERE account_no=$a and saving_account_no=$sv";
                    $stmt=$conn->prepare($sql);
                    $stmt->execute();

                     echo "<table border='1'>
                     <tr>
                    <th>Account No</th>
                    <th>Saving Account No</th>
                    <th>Account Name</th>
                    <th>Transaction Type</th>
                    <th>Amount</th>
                    <th>Time</th>
                    </tr>";

                    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                    echo '
                      <tr>
                      <td>'.$row['account_no'].'</td>
                      <td>'.$row['saving_account_no'].'</td>
                      <td>'.$row['account_name'].'</td>
                      <td>'.$row['transaction_type'].'</td>
                      <td>'.$row['ammount'].'</td>
                      <td>'.$row['TIME'].'</td>
                      </tr>';

                    }
                    echo '
                   </table>';
                }//end of frist if

                else if(isset($_POST['ac_n_button']))
                {
                     try {
			         $conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		             } catch (PDOException $e) {
			         echo 'ERROR: '.$e->getMessage();
		             }

                	$sv2=trim($_POST['ha_name']);

                	$sql2="SELECT account_no, saving_account_no, account_name, transaction_type, ammount, TIME FROM trasaction WHERE account_no=$a and account_name='$sv2'";
                    $stmt2=$conn->prepare($sql2);
                    $stmt2->execute();

                     echo "<table border='1'>
                     <tr>
                    <th>Account No</th>
                    <th>Saving Account No</th>
                    <th>Account Name</th>
                    <th>Transaction Type</th>
                    <th>Amount</th>
                    <th>Time</th>
                    </tr>";

                    while ($row=$stmt2->fetch(PDO::FETCH_ASSOC))
                    {
                    echo '
                      <tr>
                      <td>'.$row['account_no'].'</td>
                      <td>'.$row['saving_account_no'].'</td>
                      <td>'.$row['account_name'].'</td>
                      <td>'.$row['transaction_type'].'</td>
                      <td>'.$row['ammount'].'</td>
                      <td>'.$row['TIME'].'</td>
                      </tr>';

                    }
                    echo '
                   </table>';
                }//end of 2nd if

                else if(isset($_POST['ty_button']))
                {
                     try {
			         $conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		             } catch (PDOException $e) {
			         echo 'ERROR: '.$e->getMessage();
		             }

                	$sv2=trim($_POST['transaction_type']);

                	$sql2="SELECT account_no, saving_account_no, account_name, transaction_type, ammount, TIME FROM trasaction WHERE account_no=$a and transaction_type='$sv2'";
                    $stmt2=$conn->prepare($sql2);
                    $stmt2->execute();

                     echo "<table border='1'>
                     <tr>
                    <th>Account No</th>
                    <th>Saving Account No</th>
                    <th>Account Name</th>
                    <th>Transaction Type</th>
                    <th>Amount</th>
                    <th>Time</th>
                    </tr>";

                    while ($row=$stmt2->fetch(PDO::FETCH_ASSOC))
                    {
                    echo '
                      <tr>
                      <td>'.$row['account_no'].'</td>
                      <td>'.$row['saving_account_no'].'</td>
                      <td>'.$row['account_name'].'</td>
                      <td>'.$row['transaction_type'].'</td>
                      <td>'.$row['ammount'].'</td>
                      <td>'.$row['TIME'].'</td>
                      </tr>';

                    }
                    echo '
                   </table>';
                } //end of 3rd if
                
                else if(isset($_POST['date_button']))
                {
                    try {
			         $conn=new PDO('mysql:host=mysql9.000webhost.com;dbname=a9233230_project','a9233230_pushpen','ruetcse11');
			         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		             } catch (PDOException $e) {
			         echo 'ERROR: '.$e->getMessage();
		             }

                	$sv3=trim($_POST['date']);

                	$sql3="SELECT account_no, saving_account_no, account_name, transaction_type, ammount, TIME FROM trasaction WHERE account_no=$a and TIME='$sv2'";
                    $stmt3=$conn->prepare($sql2);
                    $stmt3->execute();

                     echo "<table border='1'>
                     <tr>
                    <th>Account No</th>
                    <th>Saving Account No</th>
                    <th>Account Name</th>
                    <th>Transaction Type</th>
                    <th>Amount</th>
                    <th>Time</th>
                    </tr>";

                    while ($row=$stmt2->fetch(PDO::FETCH_ASSOC))
                    {
                    echo '
                      <tr>
                      <td>'.$row['account_no'].'</td>
                      <td>'.$row['saving_account_no'].'</td>
                      <td>'.$row['account_name'].'</td>
                      <td>'.$row['transaction_type'].'</td>
                      <td>'.$row['ammount'].'</td>
                      <td>'.$row['TIME'].'</td>
                      </tr>';

                    }
                    echo '
                   </table>';
                }
               include 'transaction_history_html.php';
 ?>



