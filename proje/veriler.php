<?php

include("baglanti.php");
    if(isset($_POST["email"],$_POST["password"])){
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $sql="Select *From employee Where email='$email'";
        $result=$baglan->query($sql);
        if($result->num_rows==0){
        $ekle="INSERT INTO employee(email, password) VALUES ('".$email."','".$pass."')";

        if($baglan->query($ekle)===TRUE){
           header('location:login.php');
           
        }
    }
    else{
        echo "Bu Email e sahip bir kullanıcı zaten mevcut";
    }
    }
?>