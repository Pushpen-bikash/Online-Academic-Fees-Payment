<html>
<head>
<link rel="stylesheet" type="text/css" href="payment.css" />
</head>
<body>


<div class="for">
<form action="" method="post">
<fieldset class="account-info">
		<label>
		Account No:
		<input type="text" name="account_no" value='<?php echo $_SESSION['account_no']; ?>'>
		 </label>
		<label>
		Saving Account No:
		<input type="text" name="saving_account_no" id="saving_account_no">
		</label>
		<label>
		Account Name:
		<input type="text" name="account_name" id="account_name">
		</label>
		<label>
		Department:
		<select name="dept2" id="dept">
			<option value="cse">CSE</option>
			<option value="eee">EEE</option>
			<option value="me">ME</option>
			<option value="ce">CE</option>
			<option value="urp">URP</option>
			<option value="gce">GCE</option>
			<option value="architecture">ARCHITECTURE</option>
			<option value="mee">MEE</option>
		</select>
		</label>
		<label>
		Transaction Type:
		<select name="transaction_type" id="transaction_type">
			<option value="stipend">STIPEND</option>
			<option value="admission">ADMISSION</option>
			<option value="others_fine">OTHERS FINE</option>
			<option value="welface_fund">WELFARE FUND</option>
			<option value="exam">EXAM</option>
			<option value="hall">HALL</option>
			<option value="common_room">COMMON ROOM</option>
			<option value="pledge">PLEDGE</option>
			<option value="mosque">MOSQUE</option>
			<option value="bus">BUS RENT</option>
			<option value="others">OTHERS</option>
			<option value="testing_fee">TESTING FEE</option>
			<option value="advance_coordination">ADVANCE COORDINATION</option>
			</select>
		</label>
		<label>
		Amount:
		<input type="text" name="amount" id="ammount">
		</label>
</fieldset>
<fieldset class="account-action">
		<input class="btn" type="submit" value="Submit">
	</fieldset>
</form>
</div>
<div class="lik2">
<a href="Transaction_history.php">Transactio History</a><br>
 <a href="User_account_page.php">User Account</a><br>
 <a href="logout_demo.php">Logout</a>
 </div>
 <div class="copyr">
</p class="p1">Copy Right Preserved By <a href="#">pushpen.bikash@gmail.com</a></p>
</div>
</body>
</html>