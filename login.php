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
                <a href="file:///C:/phpProject/index.html"><i class="fa fa-home ikon" aria-hidden="true"></i>AnaSayfa</a>
                <a href="file:///C:/phpProject/hakkimizda.html"><i class="fa fa-info ikon" aria-hidden="true"></i>Hakkımızda</a>
                <a href=""><i class="fa fa-database ikon" aria-hidden="true"></i>Veriler</a>
                <a href="file:///C:/phpProject/iletisim.html"><i class="fa fa-map-pin ikon" aria-hidden="true"></i>İletişim</a>
                <a href="file:///C:/phpProject/login.html" class="btnLogin-popup"><i class="fa fa-sign-in ikon" aria-hidden="true"></i>Login</a>
            </nav> 
    </section>
    <div class="login1">
        <div class="wrapper">
            
            <div class="form-box login" id="log1">
                <span class="icon-class">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </span>               
                <form action="veriler.php">
                     <h2 id="log">Login</h2>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-envelope" aria-hidden="true"></i> </span>
                          
                        <input id="email" type="email" required>
                      <label>Email</label>
                    </div>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        
                        <input id ="pass" type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
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
                <form action="#">
                     <h2 id="log">Register</h2>
                     <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-user" aria-hidden="true"></i></span>
                       
                        <input type="text" id=text1 required>
                         <label>Username</label>
                    </div>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-envelope" aria-hidden="true"></i> </span>
                        <input type="email" required>
                      <label>Email</label>
                    </div>
                    <div class="input-box1">
                        <span class="iconlog"><i class="fa fa-lock" aria-hidden="true"></i></span>
                       
                        <input type="password" required>
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
    <script src="login.js"></script>
</body>
</html>

<?php
    include("baglanti.php");
?>