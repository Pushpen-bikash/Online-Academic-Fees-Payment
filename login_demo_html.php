
<html>
<head>
<link rel="stylesheet" type="text/css" href="net1.css" />
</head>
<body>
<div class="pic">
<img src="pic2.jpg">
</div>
<div class="for">
<form action="login_demo.php" method="post">
<fieldset class="account-info">
		<label>
		Account No:
		<input type="text" name="account_no" value="<?php echo isset($_POST['account_no']) ? $_POST['account_no'] : ' ' ?>">
		 </label>
		<label>
		Username:
		<input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ' ' ?>">
		</label>
		<label>
		Password:
		<input type="password" name="password">
		</label>
</fieldset>
<fieldset class="account-action">
		<input class="btn" type="submit" value="Login">
		<a class="lik1" href="registration_demo.php">Create an Account</a>
	</fieldset>
</form>
</div>
<div class="copyr">
</p class="p1">Copy Right Preserved By <a href="#">pushpen.bikash@gmail.com</a></p>
</div>
</body>
</html>