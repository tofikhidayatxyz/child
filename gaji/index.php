<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gaji</title>
</head>
<body>
	<form action=""  method="get">
		<h1>gaji</h1>
		<br>
		<input type="text" name="lama" placeholder="lama " value="<?=  $_GET['lama'] ?>">
		<br>
		<br>
		<input type="number" name="gaji" placeholder="gaji utama" value="<?=  $_GET['gaji'] ?>">
		<br>
		<button type="submit" name="submit">submit</button>
		<br>
		<br>
		<?php
			if(isset($_GET['submit'])) {
				$lama = $_GET['lama'];
				$gaji  =  $_GET['gaji'];
				$g  =  $lama * $gaji;
				$g1 = ($g * 5)/100;
				if($lama >= 5) {
					$g2 = ($g1 * 30)/100;
					$ga =  $g1 + $g2; 
				} elseif($lama >= 3) {
					$ga = $g1;
				}
				$hasil  =  $ga + $g;
				echo "<h1>Rp.$hasil</h1>";
			}
		?>
	</form>
</body>
</html>