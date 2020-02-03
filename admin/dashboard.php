<?php

session_start();

require '../includes/top.php'; ?>
<div class="container-fluid">
	<h1 class="text-center">Welcome</h1>
	<div class="row">
		<div class="col-sm-2">
			<?php
				require 'includes/left.php';
			?>
		</div>
		<div class="col-sm-10"></div>
	</div>
</div>

<?php require '../includes/bottom.php'; ?>