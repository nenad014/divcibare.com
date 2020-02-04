<?php
session_start();

require 'connection.php';

$title = "Kontakt";

?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container">
	<h1 class="text-center"><?php echo strtoupper($title); ?></h1>
	<h3 class="text-center">Važni telefoni</h3>
		<table>
            <tr>
                <td><b>Pošta:</b></td>
                <td>014/3577-130</td>
            </tr>
            <tr>
                <td><b>Policijska stanica:</b></td>
                <td>014/3577-402</td>
            </tr>
            <tr>
                <td><b>Zdravstvena stanica:</b></td>
                <td>014/3577-212</td>
            </tr>
            <tr>
                <td><b>Elektrodistribucija:</b></td>
                <td>014/3577-480</td>
            </tr>
            <tr>
                <td><b>Vodovod:</b></td>
                <td>014/3577-118</td>
            </tr>
            <tr>
                <td><b>Vatrogasna stanica:</b></td>
                <td>014/3577-440</td>
            </tr>
            <tr>
                <td><b>Šumska kuća:</b></td>
                <td>014/3577-282</td>
            </tr>
            <tr>
                <td><b>Čišćenje Puteva:</b></td>
                <td>014/3577-308</td>
            </tr>
        </table>
		<br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2419.279187297646!2d19.99088920053763!3d44.10467560959477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4759dd9f69ca8675%3A0x8185e6350f3a36e!2sDiv%C4%8Dibare!5e0!3m2!1sen!2srs!4v1558875801782!5m2!1sen!2srs" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<br>
	<h3 class="text-center">Postavite nam pitanje</h3>
	<br>
	<form action="sendMsg.php" method="POST">
		<div class="form-group">
			<label>Naslov: </label>
			<input type="text" class="form-control" name="subject" placeholder="Unesite naslov Vaše poruke" required>
		</div>
		<div class="form-group">
			<label>Ime: </label>
			<input type="text" class="form-control" name="name" placeholder="Unesite Vaše ime" required>
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input type="email" class="form-control" name="email" placeholder="Unesite Vašu e-mail adresu" required>
		</div>
		<div class="form-group">
			<label>Poruka: </label>
			<textarea class="form-control" rows="5" name="message" placeholder="Unesite Vašu poruku" required></textarea>
		</div>
		<button type="submit" class="btn btn-primary" name="subBtn">Pošalji</button>
	</form>
	<br>
</div>
<?php require 'includes/bottom.php'; ?>