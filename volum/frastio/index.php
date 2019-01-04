<!DOCTYPE html>
<html>
<head>
	<title>Rumus Volume</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		.header{
			border-radius:5px 5px 0 0;
		}

		.wrapper-2{
			border: 1px solid rgba(0,0,0,.125);
			border-radius:0 0 5px 5px;
		}

		.tab-content{
			border: 1px solid rgba(0,0,0,.125);
		}

		form{
			width: 50%;
		}

	</style>
</head>
<body>
	<div class="container py-4">
		<div id="wrapper" class="m-5 rounded">
			<div class="header bg-primary py-3 px-3">
				<h3 class="text-white">Rumus Bangun Ruang</h3>
			</div>
			<div class="wrapper-2">
				<div class="menu py-1">
					<ul class="nav nav-pills px-3" id="pills-tab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="pills-kubus-tab" data-toggle="pill" href="#pills-kubus" role="tab" aria-controls="pills-kubus" aria-selected="true">Kubus</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="pills-balok-tab" data-toggle="pill" href="#pills-balok" role="tab" aria-controls="pills-balok" aria-selected="false">Balok</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="pills-limas-tab" data-toggle="pill" href="#pills-limas" role="tab" aria-controls="pills-limas" aria-selected="false">Limas</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" id="pills-tabung-tab" data-toggle="pill" href="#pills-tabung" role="tab" aria-controls="pills-tabung" aria-selected="false">Tabung</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" id="pills-bola-tab" data-toggle="pill" href="#pills-bola" role="tab" aria-controls="pills-bola" aria-selected="false">Bola</a>
					  </li>
					</ul>
				</div>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-kubus" role="tabpanel" aria-labelledby="pills-kubus-tab">
						<div class="row justify-content-center py-5">
							<form method="POST" action="proses.php" id="kubus">
								<h3>Kubus</h3>
								<hr>
								<div class="form-group">
    								<label for="sisi">Masukkan Sisi</label>
   									<input type="number" class="form-control" id="sisi" name="sisi">
 								</div>
								<?php if (isset($_GET['hasilKubus'])) : ?>
									<h5 class="text-center">Volume = <?= $_GET['hasilKubus']?></h5>
								<?php endif ?>
 								<div class="col-12 py-3 px-0 clearfix">
 									<button class="btn btn-primary float-right rounded" type="reset">Bersihkan</button>
 									<button class="btn btn-primary float-right rounded mr-3" type="submit" value="hitungKubus" name="hitungKubus">Hitung</button>
 								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-balok" role="tabpanel" aria-labelledby="pills-balok-tab">
						<div class="row justify-content-center py-5">
							<form method="POST" action="proses.php">
								<h3>Balok</h3>
								<hr>
								<div class="form-group">
    								<label for="panjang">Masukkan Panjang</label>
    								<input type="number" class="form-control" id="panjang" name="panjang">
  								</div>
								<div class="form-group">
    								<label for="lebar">Masukkan Lebar</label>
    								<input type="number" class="form-control" id="lebar" name="lebar">
  								</div>
								<div class="form-group">
    								<label for="tinggi">Masukkan Tinggi</label>
    								<input type="number" class="form-control" id="tinggi" name="tinggi">
  								</div>
  								<?php if (isset($_GET['hasilBalok'])) : ?>
									<h5 class="text-center">Volume = <?= $_GET['hasilBalok']?></h5>
								<?php endif ?>
  								<div class="col-12 py-3 px-0 clearfix">
 									<buttn class="btn btn-primary float-right rounded reset" type="reset">Bersihkan</button>
 									<button class="btn btn-primary float-right rounded mr-3" type="submit" value="hitungBalok" name="hitungBalok">Hitung</button>
 								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-limas" role="tabpanel" aria-labelledby="pills-limas-tab">
						<div class="row justify-content-center py-5">
							<form method="POST" action="proses.php">
								<h3>Limas</h3>
								<hr>
								<div class="form-group">
    								<label for="luasAlas">Masukkan Luas Alas</label>
    								<input type="number" class="form-control" id="luasAlas" name="luasAlas">
  								</div>
  								<div class="form-group">
    								<label for="tinggi">Masukkan Tinggi</label>
    								<input type="number" class="form-control" id="tinggi" name="tinggiLimas">
  								</div>
  								 <?php if (isset($_GET['hasilLimas'])) : ?>
									<h5 class="text-center">Volume = <?= $_GET['hasilLimas']?></h5>
								<?php endif ?>
  								<div class="col-12 py-3 px-0 clearfix">
 									<button class="btn btn-primary float-right rounded" type="reset">Bersihkan</button>
 									<button class="btn btn-primary float-right rounded mr-3" type="submit" value="hitungLimas" name="hitungLimas">Hitung</button>
 								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-tabung" role="tabpanel" aria-labelledby="pills-tabung-tab">
						<div class="row justify-content-center py-5">
							<form method="POST" action="proses.php">
								<h3>Tabung</h3>
								<hr>
								<div class="form-group">
    								<label for="diameterAlas">Masukkan Diameter Alas</label>
    								<input type="number" class="form-control" id="diameterAlas" name="diameterAlas">
  								</div>
  								<div class="form-group">
    								<label for="tinggi">Masukkan Tinggi</label>
    								<input type="number" class="form-control" id="tinggi" name="tinggiTabung">
  								</div>
  								<?php if (isset($_GET['hasilTabung'])) : ?>
									<h5 class="text-center">Volume = <?= $_GET['hasilTabung']?></h5>
								<?php endif ?>
  								<div class="col-12 py-3 px-0 clearfix">
 									<button class="btn btn-primary float-right rounded" type="reset">Bersihkan</button>
 									<button class="btn btn-primary float-right rounded mr-3" type="submit"  name="hitungTabung" value="hitungTabung">Hitung</button>
 								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-bola" role="tabpanel" aria-labelledby="pills-bola-tab">
						<div class="row justify-content-center py-5">
							<form action="proses.php" method="POST">
								<h3>Bola</h3>
								<hr>
								<div class="form-group">
    								<label for="diameterBola">Masukkan Diameter Bola</label>
    								<input type="nuxmber" class="form-control" id="diameterBola" name="diameterBola">
  								</div>
  								<?php if (isset($_GET['hasilBola'])) : ?>
									<h5 class="text-center">Volume = <?= $_GET['hasilBola']?></h5>
								<?php endif ?>
  								<div class="col-12 py-3 px-0 clearfix">
 									<button class="btn btn-primary float-right rounded" type="reset">Bersihkan</button>
 									<button class="btn btn-primary float-right rounded mr-3" type="submit" value="hitungBola" name="hitungBola">Hitung</button>
 								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>