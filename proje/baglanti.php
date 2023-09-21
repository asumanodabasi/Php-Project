<?php
    $vt_sunucu="localhost";
    $vt_kullanici="root";
    $vt_sifre="";
    $vt_adi="ibb";


    $baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
    
    if(!$baglan){
        die("Veri tabanında bağlanılamadı".mysqli_connect_error());
    }
?>