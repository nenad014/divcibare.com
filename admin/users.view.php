<?php

require '../connection.php';

$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<?php require '../includes/top.php'; ?>
<div class="container-fluid">
	<h1 class="text-center">Svi korisnici</h1>
	<div class="row">
		<div class="col-sm-2">
			<?php
				require 'includes/left.php';
			?>
		</div>
		<div class="col-sm-10">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Ime i prezime</th>
						<th>Username</th>
						<th>email</th>
						<th>Slika</th>
						<th>Akcija</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($results as $result) : ?>
						<tr>
							<th><?php echo $result['id']; ?></th>
							<th><?php echo $result['fullname']; ?></th>
							<th><?php echo $result['username']; ?></th>
							<th><?php echo $result['email']; ?></th>
							<th><?php echo $result['profile_picture']; ?></th>
							<th><a href="#" class="btn btn-outline-danger" role="button">Ukloni korisnika</a></th>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php require '../includes/bottom.php'; ?>
