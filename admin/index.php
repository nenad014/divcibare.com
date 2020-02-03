<?php require '../includes/top.php'; ?>
<div class="container">
	<br>
	<div class="row">
		<div class="col-6 offset-3">
			<h1 class="text-center">Admin Login</h1>
			<br>
			<form action="login.admin.php" method="POST">
				<input type="text" class="form-control" name="adminName"><br>
				<input type="password" class="form-control" name="adminPwd"><br>
				<button type="submit" class="form-control btn btn-primary" name="submitBtn">Prijava</button>
			<br>
			</form>
		</div>
	</div>
	
</div>

<?php require '../includes/bottom.php'; ?>
