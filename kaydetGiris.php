<?php 
require_once("baglan.php");

if(isset($_POST["GelenEposta"])){

   $GelenEposta  = Filtre($_POST["GelenEposta"]);

}else{
    $GelenEposta  = "";


}

if(isset($_POST["GelenSifre"])){
    $GelenEposta  = Filtre($_POST["GelenSifre"]);

}else{
 
    $GelenSifre  = "";

}

$GelenEposta  =  Filtre($_POST["GelenEposta"]);
$GelenSifre  =  Filtre($_POST["GelenSifre"]);

$Kontrol  =  $db->prepare('SELECT * FROM uyelik WHERE eposta=?  AND sifre=?   ');

$Kontrol->execute(array($GelenEposta,$GelenSifre));
if($Kontrol->rowCount()){//rowCount satır sayısını dönderiri eğer veri varsa 0>dan büyük değer gelecektir
$gelenVeriler=$Kontrol->fetchAll();
//print_r($gelenVeriler); veritabanından gelen tek satırlık veriyi ekrana yazdırdık.
    ?>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <td>Kullanıcı adı</td>
                    <td><?=$gelenVeriler[0][1]?></td>
                </tr>
                <tr>
                    <td>Soyad</td>
                    <td><?=$gelenVeriler[0][2]?></td>
                </tr>
                <tr>
                    <td>Mail</td>
                    <td><?=$gelenVeriler[0][3]?></td>
                </tr>
                <tr>
                    <td>Şifre</td>
                    <td><?=$gelenVeriler[0][4]?></td>
                </tr>
                <tr>
                    <td>Şifre MD5</td>
                    <td><?=md5($gelenVeriler[0][4])?></td>
                </tr>
            </table>
        </div>
    </div>

    <?php

}else{
    echo "Lütfen giriş bilgilerinizi kontrol ederek tekrar giriş yapınız <br><br> <a href='index.php'>Login Sayfası</a>";
}

/*
$_SESSION["Kullanici"] = $GelenEposta;
 echo  $GelenEposta . " | " . $GelenSifre . "<br>";
 echo $_SESSION["Kullanici"];
 die();
*/

//$ad  =  Filtre($_POST["ad"]);
//$soyad  =  Filtre($_POST["soyad"]);

//$Kontrol2  =  $db->prepare('SELECT * FROM uyelik WHERE ad=?  AND soyad=?   ');

//$Kontrol2->execute(array($ad,$soyad));
/*
print_r();
if($KontrolSayisi>0){
    $_POST["eposta"] = $GelenEposta;
    echo "<h3>Hoşgeldin </h3>" . $GelenEposta . "<br><br>";
    //echo "<h3>Hoşgeldin </h3>" . $ad . " " .$soyad;
    //header("refresh:2;url=index.php");
    

}else{
    echo "HATA<br>";
    echo  "Girilen Bilgiler ile eşleşen Kullanıcı KAydı Yoktur<br>";
    echo "<a href='index.php'> Ana Sayfa </a>";
    exit();
}

*/

?>