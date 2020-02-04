<?php

require 'connection.php';

if(isset($_POST['showPassBtn'])) {
	$unm = $_POST['unm'];
	$mobile = $_POST['mobile'];

	$sql = "SELECT password FROM users WHERE username = '$unm' AND mobile = '$mobile'";
	$query = mysqli_query($conn, $sql);
	$res = mysqli_fetch_assoc($query);
	if($res) {
		echo 'Vaša lozinka je : ' . $res['password'];
		echo "<br>";
		echo "<a href='login.view.php'>Nazad na prijavu</a>";
	} else {
		echo 'Uneli ste pogrešne podatke';
	}
}