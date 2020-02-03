<?php

session_start();
require_once 'connection.php';

if(isset($_POST['loginBtn'])) {
	$unm = $_POST['unm'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM users WHERE username = '$unm' AND password = '$pwd'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($query)['username'];
	if($result) {
		$_SESSION['username'] = $result;
		header('Location: profile.view.php');
	} else {
		header('Location: login.view.php');
	}
}