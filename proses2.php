<?php
$id_customer = $_POST["ID_Customer"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$member = $_POST["member"];
$bayar = $_POST["bayar"];

if ((trim($id_customer) == '') || ($id_customer < 0) || (ereg('[^0-9]', $id_customer)))
echo "Input ID Customer anda salah<br>";
if (strlen($id_customer) == 0)
echo "Silahkan masukkan ID Customer anda<br>";
if (strlen($nama) == 0)
echo "Silahkan masukkan Nama anda<br>";
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
echo "Invalid email<br>";}
if (strlen($alamat) == 0)
echo "Silahkan masukkan Alamat anda<br>";
?>
