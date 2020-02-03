<?php

require 'connection.php';
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];

if(isset($_POST['updateBtn'])) {
	$img = $_FILES['img'];

	$fileName = $_FILES['img']['name'];
	$fileTmpName = $_FILES['img']['tmp_name'];
	$fileSize = $_FILES['img']['size'];
	$fileError = $_FILES['img']['error'];
	$fileType = $_FILES['img']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if(in_array($fileActualExt, $allowed)) {
		if($fileError === 0) {
			if($fileSize < 1000000) {
				$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				$fileDestination = 'uploads/' . $fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				echo "Greska! Vas fajl je prevelik.";
			}
		} else {
			echo "Greska prilikom unosenja fajla";
		}
	} else {
		echo "Ne mozete uneti fajlove ovog tipa";
	}

	$sql = "UPDATE users SET  fullname = '$fullname',
							  username = '$username',
							  profile_picture = '$img'
						WHERE email = '$email'";
	$query = mysqli_query($conn, $sql);

	if($query) {
		header('Location: profile.view.php');
	} else {
		header('Location: update.view.php');
	}
}