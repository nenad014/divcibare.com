<?php
session_start();
require 'connection.php';

$username = $_SESSION['username'];

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
			<img src="<?php echo $result['profile_picture'];?>" width="25%" class="rounded">
			<p><strong>Ime i prezime: </strong> <?php echo $result['fullname']; ?></p>
			<p><strong>Username korisnika: </strong> <?php echo $result['username']; ?></p>

		</div>
		<div class="col-sm-3">RIGHT</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>