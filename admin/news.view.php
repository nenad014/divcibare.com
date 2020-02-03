<?php require '../includes/top.php';

require '../connection.php';

$sql = "SELECT * FROM news";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<div class="container-fluid">
	<h1 class="text-center">Vesti</h1>
	<div class="row">
		<div class="col-sm-2">
			<?php
				require 'includes/left.php';
			?>
		</div>
		<div class="col-sm-10">
			<a href="add.news.view.php" class="btn btn-outline-primary" role="button" name="addNewsBtn">Dodaj vesti</a>
			<br>
			<h3 class="text-center">Sve vesti</h3>
			<br>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Naslov</th>
						<th>Tekst</th>
						<th>Datum postavljanja</th>
						<th>Slika</th>
						<th>Izvor</th>
						<th>Akcija</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($results as $result) : ?>
					<tr>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['title']; ?></td>
						<td><?php echo substr($result['article'], 0, 50); ?></td>
						<td><?php echo $result['date_post']; ?></td>
						<td><?php echo $result['image']; ?></td>
						<td><?php echo $result['source']; ?></td>
						<td><a href="update.news.view.php?id=<?php echo $result['id']; ?>" class="btn btn-outline-warning">Uredi vest</a> <a href="" class="btn btn-outline-danger">Ukloni vest</a></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php require '../includes/bottom.php'; ?>