<?php
require 'lib/aes.php';
require 'lib/aesctr.php';

$key =  "qrcode";
$namaFile = file_get_contents($_FILES['doc']['tmp_name']);
$encFile = AesCtr::encrypt($namaFile,$key,128);
$enkrip = file_put_contents("enkrip/".($_FILES['doc']['name']), $encFile);

if ($enkrip) {
	echo "File Has Been Encrypted";
}
?>