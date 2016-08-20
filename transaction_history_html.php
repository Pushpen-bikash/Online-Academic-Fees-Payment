
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="transaction.css" />
 </head>
 <body>
 <div class="for">
<form action="" method="post">

<fieldset class="account-info1">
		<label>
		Show Your Transaction History Group By Saving Account No:
		<input type="text" name="hsn" id="h_saving_account_no">
		 </label>
</fieldset>
<fieldset class="account-action1">
		<input class="btn1" type="submit"  name="saving_button" value="GO">
		</fieldset>
		
<fieldset class="account-info2">
		<label>
		Show Your Transaction History Group By Account Name:
		<input type="text" name="ha_name" id="h_a_name">
		 </label>
</fieldset>
<fieldset class="account-action2">
		<input class="btn2" type="submit"  name="ac_n_button" value="GO">
		</fieldset>
		

<fieldset class="account-info3">
		<label>
		Show Your Transaction History Group By Transaction Type:
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
</fieldset>
<fieldset class="account-action3">
		<input class="btn3" type="submit"  name="ty_button" value="GO">
		<a class="lik1" href="logout_demo.php"><b>Logout</b></a>
		</fieldset>		
</form>
</div>
 <div class="copyr">
</p class="p1">Copy Right Preserved By <a href="#">pushpen.bikash@gmail.com</a></p>
</div>
 </body>
 </html>