<?php require '../includes/top.php'; ?>
<div class="container-fluid">
	<h1 class="text-center">Apartmani</h1>
	<div class="row">
		<div class="col-sm-2">
			<?php
				require 'includes/left.php';
			?>
		</div>
		<div class="col-sm-10">
			<a href="add.apartment.view.php" class="btn btn-outline-primary" role="button" name="addApartmentBtn">Dodaj apartman</a>
			<br>
			<h3 class="text-center">Svi apartmani</h3>
			<br>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Naziv</th>
						<th>Vlasnik</th>
						<th>email</th>
						<th>Slika</th>
						<th>Akcija</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<?php require '../includes/bottom.php'; ?>