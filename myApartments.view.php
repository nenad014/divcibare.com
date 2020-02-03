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
			<p class="text-justify">Imate apartmane za izdavanje? Zašto se ne bi reklamirali na našem sajtu? Potrebno je samo da popunite prostu formu a mi ćemo Vam pomoći da Vas lakše nađu naši posetioci sajta.</p>
			<a href="addApartment.view.php" class="btn btn-outline-primary text-center form-control">Dodaj apartman</a>
		</div>
		<div class="col-sm-3">RIGHT</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>