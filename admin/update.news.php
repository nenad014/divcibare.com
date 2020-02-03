<?php

require '../connection.php';

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

	move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES['img']['name']);
	$img = "uploads/" . $_FILES['img']['name'];

$id = $_POST['id'];
$title = $_POST['title'];
$article = $_POST['article'];
$date = $_POST['date'];
$source = $_POST['source'];

$sql = "UPDATE news SET title = '$title', article = '$article',
				date_post = '$date', image = '$img', source = '$source'
				WHERE id=$id";
$query = mysqli_query($conn, $sql);

if($query) {
	header('Location: news.view.php');
} else {
	header('Location: update.news.view.php');
}