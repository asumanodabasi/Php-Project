<?php

include("baglanti.php");


    
    if(isset($_POST["email"],$_POST["password"])){
        
        $emailCheck=$_POST["email"];
        $pass=$_POST["password"];
        $sec="Select * From employee Where email='$emailCheck' and password='$pass'";
        $sonuc=$baglan->query($sec);
         header("location:ibbveriler.php");
      }

      else{
         echo "<script> alert('Kullanıcı adı veya şifre hatalı!') </script>";
      }
    ?>