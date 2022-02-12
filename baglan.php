<?php 

session_start(); ob_start();

$db = new PDO('mysql:host = localhost;dbname=uyelik', 'root', '');





function Filtre($Deger){

    $bir   =   trim($Deger);
    $iki   =   strip_tags($bir);
    $uc    =   htmlspecialchars($iki, ENT_QUOTES);
    $Sonuc  = $uc;
    return $Sonuc;

}

?>