 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="user_account.css" />
 </head>
 <body>
 <div class="for">
<form action="User_account_page.php" method="post">

<fieldset class="account-info1">
		<label>
		See your remaning balance:
		<input type="text" name="account_no" id="account_no-_b" value='<?php echo $_SESSION['account_no']; ?>'>
		 </label>
</fieldset>
<fieldset class="account-action1">
		<input class="btn1" type="submit"  name="get" value="GET BALANCE">
		</fieldset>
		
<fieldset class="account-info2">
		<label>
		Deposit Your Money:
		<input type="text" name="balance" id="balance" placeholder="Enetr Amount">
		 </label>
</fieldset>
<fieldset class="account-action2">
		<input class="btn2" type="submit"  name="deposit" value="DEPOSIT">
		<a class="lik1" href="logout_demo.php"><b>Logout</b></a>
		</fieldset>
</form>
</div>
 <div class="copyr">
</p class="p1">Copy Right Preserved By <a href="#">pushpen.bikash@gmail.com</a></p>
</div>
 </body>
 </html>