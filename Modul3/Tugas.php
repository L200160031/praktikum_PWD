<html>
<head><title>Tugas</title></head>
<body>
<form action="Tugas.php" method="get" name="penjumlahn">
Nilai A adalah <input type="text" name='a' size='5'></br>
Nilai B adalah <input type="text" name='b' size='5'></br>
<input type='submit' name='jumlah' value='Jumlahkan'>
</form>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$a = $_GET['a'];
$b = $_GET['b'];
$jumlah = $_GET['jumlah'];

$total= $a + $b;
if($jumlah){
	echo "Nilai A adalah $a</br>Nilai B adalah $b</br>Jadi Nilai A ditambah Nilai B adalah $total";
}
?>
</body>
</html>