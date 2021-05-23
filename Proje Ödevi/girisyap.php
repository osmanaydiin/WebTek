<?php 
//session_start();
$userEmail="g201210068@sakarya.edu.tr";
$userPassword="g201210068";
$kullaniciAdi=$_POST["kullaniciAdi"];
$sifre= $_POST["sifre"];

//$_SESSION['KullanıcıAdı']=$kullaniciAdi;

if($userEmail==$kullaniciAdi && $userPassword==$sifre)
{  
    header("location:http://osmanaydinwebtek.infinityfreeapp.com/");
}
else{
    header("location:http://osmanaydinwebtekgiris.42web.io/");
}

die()


//kullaniciAdiKontrol(kullaniciAdi,sifre);

?>