<?php
require 'connection.php';
session_start();
$username = $_SESSION['username'];
// $id = $_GET['id'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container-fluid">
	<h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h1>
	<div class="row">
		<div class="col-sm-3"><?php require 'includes/left.php'; ?></div>
		<div class="col-sm-6">
			<form action="update.php" method="POST" enctype="multipart/form-data">
				<input type="text" class="form-control" name="fullname" value="<?php echo $result['fullname']; ?>"><br>
				<input type="text" class="form-control" name="username" value="<?php echo $result['username']; ?>"><br>
				<input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>"><br>
				<input type="file" class="form-control-file border" name="img"><br>
				<button class="btn btn-outline-primary form-control" type="submit" name="updateBtn">Promeni</button>
			</form><br>
		</div>
		<div class="col-sm-3">RIGHT</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>