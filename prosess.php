
<?php
$kiri = $_POST["operandkiri"];
$operator = $_POST["operator"];
$kanan = $_POST["operandkanan"];
switch ($operator) {
	case "+":
	$hasil = $kiri + $kanan;
	break;
	case "-":
	$hasil = $kiri - $kanan;
	break;
	case "*":
	$hasil = $kiri * $kanan;
	break;
	case "/":
	$hasil = $kiri / $kanan;
	break;
	case "%":
	$hasil = $kiri % $kanan;
	break;
}
echo "Hasil pertambahan $kiri dan $kanan adalah $hasil"
?>
