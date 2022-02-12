<?php 
require_once("baglan.php");


$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$eposta = $_POST["eposta"];
$sifre = $_POST["sifre"];
$sifretekrar = $_POST["sifretekrar"];


$sth = $db -> prepare('INSERT INTO uyelik SET ad = ?,soyad = ?,eposta = ?, sifre =?, sifretekrar=? ');

$sth -> execute(array($ad,$soyad,$eposta,$sifre,$sifretekrar));

echo "TEBRİKLER , işlem başarılı<br><br>";
echo "Hoşgeldin " . $ad  ." " . $soyad;



header("refresh:2;url=index.php");







?>