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
			<h3 class="text-center">Dodaj apartman</h3>
			<br>
			<form action="addApartment.php" method="POST" enctype="multipart/form-data">
				<label>Naziv apartmana</label>
				<input type="text" name="name" class="form-control" placeholder="Ime apartmana"><br>
				<label>Broj soba</label>
				<input type="number" name="no_of_rooms" class="form-control" placeholder="Broj soba"><br>
				<label>Cena po osobi</label>
				<div class="row">
					<div class="col-sm-6"><input type="text" name="price_adults" class="form-control" placeholder="Odrasli"></div>
					<div class="col-sm-6"><input type="text" name="price_children" class="form-control" placeholder="Deca"></div>
				</div>
				<br>
				<label>Dodatne usluge</label><br>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="opt" value="internet">Internet
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="opt" value="pet_friendly">Kućni ljubimci
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="opt" value="tv">TV
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="opt" value="parking">Parking
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="opt" value="kitchen">Kuhinja
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="opt" value="towels">Peškiri
					</label>
				</div>
				<br>
				<br>
				<label>Dodaj slike</label><br>
				<input type="file" name="img" multiple="multiple"><br>
				<br>
				<label>Opis smeštaja</label>
				<textarea name="details"  class="form-control" rows="5"></textarea><br>
				<button class="btn btn-primary form-control" type="submit" name="addApartmentBtn">Dodaj</button>
			</form>	
		</div>
		<div class="col-sm-3">RIGHT</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>
