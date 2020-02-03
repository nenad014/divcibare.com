<?php

session_start();

require '../connection.php';

if(isset($_POST['submitBtn'])) {
	$adminName = $_POST['adminName'];
	$adminPwd = $_POST['adminPwd'];

	$sql = "SELECT * FROM admin WHERE admin_name = '$adminName' AND admin_pwd = '$adminPwd'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($query)['admin_name'];
	if($result) {
		$_SESSION['admin_name'] = $result;
		header('Location: dashboard.php');
	} else {
		header('Location: index.php');
	}
}