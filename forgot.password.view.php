<?php
$title = 'Zaboravili ste lozinku';
?>

<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container-fluid">
	<h1 class="text-center"><?php echo strtoupper($title); ?></h1>
	<div class="row">
		<div class="col-sm-6">
			<h3 class="text-center">Prijavite se</h3>
			<br>
			<p class="text-justify">Nemate nalog? Možete ga kreirati za manje od minut.</p>
			<p class="text-justify"><a href="forgot.password.view.php">Zaboravili ste lozinku?</a> <a href="register.view.php">Napravite novi nalog.</a></p>
		</div>
		<div class="col-sm-6">
			<form action="forgot.password.php" method="POST">
				<div class="form-group">
					<label>Korisničko ime</label>
					<input class="form-control" type="text" name="unm" placeholder="Unesite Vaše korisničko ime" required>
				</div>
				<div class="form-group">
					<label>Broj telefona</label>
					<input class="form-control" type="text" name="mobile" placeholder="Unesite Vaš broj telefona" required>
				</div>
				<button type="submit" name="showPassBtn" class="btn btn-primary">Prikaži lozinku</button>
			</form>
			<br>
		</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>