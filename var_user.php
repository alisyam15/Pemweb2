<?php
// definisikan variables
$nama = 'Alisya Mandasari';
$umur = 18;
$berat = 50;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo "<br>";

// definisikan variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo "<br>";
// definisikan variable konstanta
// define: untuk memanggil variable konstanta
define('PELAJARAN', 'Matematika');

echo PELAJARAN;

 ?>