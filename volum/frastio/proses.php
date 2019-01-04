<?php

    if(isset($_POST['hitungKubus'])) {
        kubus();
    }
    function kubus(){
    	$sisi = $_POST['sisi'];
    	$hasil = $sisi * $sisi * $sisi;
    	header("location:index.php?hasilKubus=$hasil");
    }
?>

<?php  

    if(isset($_POST['hitungBalok'])) {
        balok();
    }
    function balok(){
    	$tinggi = $_POST['tinggi'];
    	$panjang = $_POST['panjang'];
    	$lebar = $_POST['lebar'];
    	$hasil = $panjang * $lebar * $tinggi;
    	header("location:index.php?hasilBalok=$hasil");
    }
?>

<?php  

	if(isset($_POST['hitungLimas'])) {
		limas();
	}
	function limas(){
		$tinggi = $_POST['tinggiLimas'];
		$luasAlas = $_POST['luasAlas'];
		$hasil = ($luasAlas / 3) * $tinggi;
		header("location:index.php?hasilLimas=$hasil");
	}

?>

<?php

	if(isset($_POST['hitungTabung'])){
		tabung();
	} 
	function tabung(){
		$tinggiTabung=$_POST['tinggiTabung'];
		$diameterAlas = $_POST['diameterAlas'];
		$jari = ($diameterAlas / 2) * ($diameterAlas / 2);
		$hasil = (($jari * 22)/7) * $tinggiTabung;
		header("location:index.php?hasilTabung=$hasil");		
	}
?>

<?php  

	if(isset($_POST['hitungBola'])){
		bola();
	}

	function bola(){
		$diameterBola = $_POST['diameterBola'];
		$jari = ($diameterBola / 2) * ($diameterBola / 2) * ($diameterBola / 2);
		$hasil = ((($jari * 22)/7)*4)/3;
		header("location:index.php?hasilBola=$hasil");
	}
?>