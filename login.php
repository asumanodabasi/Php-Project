<?php
   
    include("baglanti.php");


    
    if(isset($_POST["email"],$_POST["password"])){
        
        $emailCheck=$_POST["email"];
        $pass=$_POST["password"];
        $sec="Select * From employee Where email='$emailCheck' and password='$pass'";
        $sonuc=$baglan->query($sec);
    
    if($sonuc){
        
        while ($cek=$sonuc->fetch_assoc()) {
            header('location:ibbveriler.php');

            echo  "
            ".$cek['email']." ,".$cek['password']."
            ";
        }
       
    }

    else{
    echo 
    "Kullanıcı adı veya şifre hatalı";
    }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto:ital,wght@1,500&display=swap"
        rel="stylesheet">
    <title>LOGIN</title>
</head>
<body>
    <section id="menu">
        <div id="logo"></div>
            <nav>
               
            <a href="index.html"><i class="fa fa-home ikon" aria-hidden="true"></i>AnaSayfa</a>
            <a href="hakkimizda.html"><i class="fa fa-info ikon" aria-hidden="true"></i>Hakkımızda</a>
            
            <a href="iletisim.html"><i class="fa fa-map-pin ikon" aria-hidden="true"></i>İletişim</a>
            <a href="login.php"><i class="fa fa-sign-in ikon" aria-hidden="true"></i>Login</a>
            </nav> 
    </section>
  
   
    <div class="login1">
        <div class="wrapper">
            
            <div class="form-box login" id="log1">
                <span class="icon-class">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </span>               
                <form action="" method="post" onsubmit="return validated()">
                     <h2 id="log">Login</h2>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-envelope" aria-hidden="true"></i> </span>
                          
                        <input id="email" type="email" name="email" required>
                      <label>Email</label>
                    </div>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        
                        <input id ="pass" type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me </label>
                        <a href="#">Forgot Password?</a>
                    </div>
                 
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account  <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
              
            </div>

            
            <div class="form-box register" id="register1">
                <span class="icon-class">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </span>               
                <form action="veriler.php" method="post" onsubmit="return validated()">
                     <h2 id="log">Register</h2>
                     <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-user" aria-hidden="true"></i></span>
                       
                        <input type="text" id=text1 name="name"required>
                         <label>Username</label>
                    </div>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-envelope" aria-hidden="true"></i> </span>
                        <input type="email" name="email" required>
                      <label>Email</label>
                    </div>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-lock" aria-hidden="true"></i></span>
                       
                        <input type="password" name ="password"required>
                         <label>Password</label>
                        
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms &conditions</label>
                        
                    </div>
                    
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account  <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
          
        </div>
    </div>
    <script src="kontrol.js"></script>
    <script src="login.js"></script>
</body>
</html>

