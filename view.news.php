<?php
require 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id=$id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container col-8 offset-2 bg-light">
	<h3><?php echo $result['title']; ?></h3>
	<br>
	<img src="<?php echo $result['image']; ?>" alt="image">
	<p><?php echo $result['date_post']; ?></p>
	<br>
	<p class="text-justify"><?php echo $result['article']; ?></p>
	<br>
	<p><b>Izvor: <i><?php echo $result['source']; ?></i></b></p>
</div>
<?php require 'includes/bottom.php'; ?>