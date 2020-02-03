<?php
$title = 'Registracija';
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
			<p class="text-justify">Zaboravili ste lozinku? <a href="register.view.php">Napravite novi nalog.</a></p>
		</div>
		<div class="col-sm-6">
			<form action="register.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Ime i prezime</label>
					<input class="form-control" type="text" name="fnm" placeholder="Unesite Vaše ime i prezime" required>
				</div>
				<div class="form-group">
					<label>Korisničko ime</label>
					<input class="form-control" type="text" name="unm" placeholder="Unesite Vaše korisničko ime" required>
				</div>
				<div class="form-group">
					<label>email</label>
					<input class="form-control" type="email" name="email" placeholder="Unesite Vaš email" required>
				</div>
				<div class="form-group">
					<label>Lozinka</label>
					<input class="form-control" type="password" name="pwd" placeholder="Unesite Vašu lozinku"required>
				</div>
				<div class="form-group">
					<label>Broj telefona</label>
					<input class="form-control" type="text" name="phone" placeholder="Unesite Vaš broj telefona"required>
				</div>
				<div class="form-group">
					<label>Adresa</label>
					<input class="form-control" type="text" name="address" placeholder="Unesite Vašu adresu"required>
				</div>
				<div class="form-group">
					<label>Profila slika</label>
					<input class="form-control" type="file" name="img" accept="uploads/*" required>
				</div>
				<button type="submit" name="regBtn" class="btn btn-primary">Registracija</button>
			</form>
			<br>
		</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>