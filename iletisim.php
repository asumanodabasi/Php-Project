<?php

   session_start();
   if(isset($_POST["email"],$_POST["password"]))
   {
      if($_POST["email"]=="asuman@gmail.com" &&  $_POST["password"]==12345){
         $_SESSION["user"]=$_POST["email"];
         header("location:iletisim.html");
      }

      else{
         echo "<script> alert('Kullanıcı adı veya şifre hatalı!') </script>";
      }

   }
   // isset( $_POST[ 'email' ]);
   // isset ($_POST[ 'password' ]);
   // isset ($_POST[ 'mesaj' ]);
   // isset( $_POST[ 'text' ]);
   // echo "Kaydınız alınmıştır..";
   // isset($_POST [ 'text' ]);
    ?>