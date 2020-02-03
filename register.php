<?php

require 'connection.php';

if(isset($_POST['regBtn'])) {
	if(empty($_FILES['img']['name'])) {
		$msg[] = "Molimo Vas dodajte sliku";
	}
	if($_FILES['img']['error']>0) {
		$msg[] = "Greska prilikom ucitavanja slike";
	}
	if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG" || strtoupper(substr($_FILES['img']['name'],-4))==".GIF" || strtoupper(substr($_FILES['img']['name'],-4))==".PNG")) {
		$msg[] = "Pogresan tip fajla";
	}
	if(file_exists("uploads/" . $_FILES['img']['name'])) {
		$msg[] = "Slika vec postoji. Molimo Vas da ne unosite slike sa istim imenom.";
	}

	if(!empty($msg)) {
		echo '<b>Greska:-</b><br>';
		foreach ($msg as $k) {
			echo '<li>' . $k;
		}
	} else {
	move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES['img']['name']);
	$img = "uploads/" . $_FILES['img']['name'];
	$fnm = $_POST['fnm'];
	$unm = $_POST['unm'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$sql = "INSERT INTO users(id, fullname, username, email, password, mobile, address, profile_picture) VALUES(NULL, '$fnm', '$unm', '$email', '$pwd', '$phone', '$address', '$img')";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header('Location: login.view.php');
	} else {
		header('Location: register.view.php');
	}
}
}