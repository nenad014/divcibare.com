<?php require '../includes/top.php'; ?>
<div class="container-fluid">
	<h1 class="text-center">Dodaj vesti</h1>
	<div class="row">
		<div class="col-sm-2">
			<?php
				require 'includes/left.php';
			?>
		</div>
		<div class="col-sm-10">
			<form action="news.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="title" class="form-control" placeholder="Naslov vesti"><br>
				<textarea class="form-control" rows="5" name="article" placeholder="Tekst vesti"></textarea><br>
				<input type="date" name="date" class="form-control" min="2019/05/07" placeholder="Datum"><br>
				<input type="file" class="form-control-file border" name="img"><br>
				<input type="text" name="source" class="form-control" placeholder="Izvor vesti"><br>
				<button type="submit" class="btn btn-outline-primary" name="addNewsBtn">Postavi vest</button>
			</form>
		</div>
	</div>
</div>

<?php require '../includes/bottom.php'; ?>