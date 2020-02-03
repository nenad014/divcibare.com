<?php
$title = 'Prijava';
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
			<form action="login.php" method="POST">
				<div class="form-group">
					<label>Korisničko ime</label>
					<input class="form-control" type="text" name="unm" placeholder="Unesite Vaše korisničko ime" required>
				</div>
				<div class="form-group">
					<label>Lozinka</label>
					<input class="form-control" type="password" name="pwd" placeholder="Unesite Vašu lozinku"required>
				</div>
				<button type="submit" name="loginBtn" class="btn btn-primary">Prijava</button>
			</form>
			<br>
		</div>
	</div>
</div>
<?php require 'includes/bottom.php'; ?>