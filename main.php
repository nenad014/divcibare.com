<div class="container-fluid search">
	<div class="row">
		<div class="col-sm-6">
			<h3 class="text-center">PRONAĐITE SMEŠTAJ</h3>
			<br>
			<p>Želite da dođete na Divčibare? Nemate rezervisano? Bez brige.</p>
			<p>Unesite svoje podatke, a mi ćemo Vam pomoći da pronađete smeštaj.</p>
		</div>
		<div class="col-sm-6">
			<form action="" method="POST">
				<div class="row">
					<div class="col-sm-6">
						<input class="form-control" type="text" name="ime" placeholder="Unesite Vaše ime">
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="prezime" placeholder="Unesite Vaše prezime">
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						<input class="form-control" type="text" name="broj" placeholder="Unesite Vaš broj telefona">
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="email" name="email" placeholder="Unesite Vaš email">
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						<input class="form-control" type="number" name="odrasli" placeholder="Unesite broj odraslih">
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="number" name="deca" placeholder="Unesite broj dece">
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						<input class="form-control" type="date" name="od" min="2019/05/07">
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="date" name="do" max="2020/12/31">
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-6">
						<input class="form-control" type="number" name="minPrice" placeholder="Unesite minimalnu cenu">
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="number" name="maxPrice" placeholder="Unesite maksimalnu cenu">
					</div>
				</div><br>
				<div class="form-group">
					<textarea class="form-control" name="poruka" rows="5" placeholder="Unesite Vašu poruku" data-length="250"></textarea>
				</div>
				<button type="submit" class="btn btn-outline-primary" name="searchBtn">Pretraga</button>
			</form>
		</div>
	</div>
</div>
<div class="container-fluid col-6 offset-3">
	<h3 class="text-center">VESTI</h3>
	<br>
	<?php
	$sql = "SELECT * FROM news ORDER BY date_post DESC LIMIT 3";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	foreach ($result as $row) :
	?>
	<div class="card">
		<div class="card-header text-center"><h5><?php echo $row['title']; ?></h5></div>
		<div class="card-body text-justify"><?php echo substr($row['article'], 0, 200) ; ?>
			<a href="view.news.php?id=<?php echo $row['id']; ?>">Pročitaj ceo tekst</a>
		</div>
		<div class="card-footer"><button type="button" class="btn btn-info"><?php echo $row['date_post'];?></button><button type="button" class="btn btn-outline-info float-right"><?php echo $row['source']; ?></button></div>
	</div>
	<br>
<?php endforeach; ?>
</div>
<div class="container-fluid">
	<h3 class="text-center">OBILAZAK</h3>
	<br>
	<div class="row">
		<div class="col-sm-3 text-center">
			<i class="fas fa-hiking" style='font-size:64px'></i>
			<h4 class="text-center"><a href="pesackeStaze.php">PEŠAČKE STAZE</a></h4>
		</div>
		<div class="col-sm-3 text-center">
			<i class="fas fa-skiing" style='font-size:64px'></i>
			<h4 class="text-center"><a href="skiSteze.php">SKIJAŠKE STAZE</a></h4>
		</div>
		<div class="col-sm-3 text-center">
			<i class="fas fa-biking" style='font-size:64px'></i>
			<h4 class="text-center"><a href="img/mapa-biciklisticke-staze.jpg" target="_blank">BICIKLISTIČKE STAZE</a></h4>
		</div>
		<div class="col-sm-3 text-center">
			<i class='fas fa-map' style='font-size:64px'></i>
			<h4 class="text-center"><a href="img/mapa.jpg" target="_blank">MAPA DIVČIBARA</a></h4>
		</div>
	</div>
</div>
<div class="container">
	<h3 class="text-center">GALERIJA</h3>
	<br>
	<div class="row text-center">
		<div class="col-sm-3">
			<img class="img-fluid img-thumbnail" src="img/divcibare-1.png" alt="Divčibare" width="460" height="345">
		</div>
		<div class="col-sm-3">
			<img class="img-fluid img-thumbnail" src="img/divcibare-2.jpg" alt="Divčibare" width="460" height="345">
		</div>
		<div class="col-sm-3">
			<img class="img-fluid img-thumbnail" src="img/divcibare-3.png" alt="Divčibare" width="460" height="345">
		</div>
		<div class="col-sm-3">
			<img class="img-fluid img-thumbnail" src="img/divcibare-4.jpg" alt="Divčibare" width="460" height="345">
		</div>
	</div>
</div>