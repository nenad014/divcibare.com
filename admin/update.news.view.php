<?php

require '../connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM news WHERE id = $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
?>

<?php require '../includes/top.php'; ?>
<div class="container-fluid">
	<h1 class="text-center">Uredi vest</h1>
	<div class="row">
		<div class="col-sm-2">
			<?php
				require 'includes/left.php';
			?>
		</div>
		<div class="col-sm-10">
			<form action="update.news.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" class="form-control" name="id" value="<?php echo $result['id']; ?>">
				<input type="text" name="title" class="form-control" value="<?php echo $result['title']; ?>"><br>
				<textarea class="form-control" rows="5" name="article"><?php echo $result['article']; ?></textarea><br>
				<input type="date" name="date" class="form-control" min="2019/05/07" value="<?php echo $result['date_post']; ?>"><br>
				<input type="file" class="form-control-file border" name="img"><br>
				<input type="text" name="source" class="form-control" value="<?php echo $result['source']; ?>"><br>
				<button type="submit" class="btn btn-outline-primary" name="updateNewsBtn">Uredi vest</button>
			</form>
		</div>
	</div>
</div>

<?php require '../includes/bottom.php'; ?>