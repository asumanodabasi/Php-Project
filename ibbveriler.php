<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERİLER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

</head>


<body>
    <section id="menu">
        <div id="logo"></div>
            <nav>
                <a href="index.html"><i class="fa fa-home ikon" aria-hidden="true"></i>AnaSayfa</a>
                <a href="hakkimizda.html"><i class="fa fa-info ikon" aria-hidden="true"></i>Hakkımızda</a>
                <a href="ibbveriler.php"><i class="fa fa-database ikon" aria-hidden="true"></i>Veriler</a>
                <a href="iletisim.html"><i class="fa fa-map-pin ikon" aria-hidden="true"></i>İletişim</a>
                <a href="login.php"><i class="fa fa-sign-in ikon" aria-hidden="true"></i>Login</a>
            </nav> 
    </section>
    <div class="search">
        <input type="text" placeholder="search" class="tboxsearch">
        <div class="btnsearch">
            <i class="fa fa-search"></i>
        </div>
        
       </div>
       <select class="select" aria-label="Default select example">
        <option  value="http://localhost/proje/users.php" class="user">Users</option>
        <option value="http://localhost/proje/employee.php" class="employee">Employee</option>
        <option value="http://localhost/proje/ibbveriler.php" selected class="veri">Ocak Ayı Veri Seti</option>
      </select>
      <script>
            $(document).ready(function() {
                $(".select").on("change",function() {
                    var s = $(".select").val();
                    window.location.href = s;
                });
            });
            </script>
   
      <div class="search1"> </div>

      <table class="table">
  <thead>
    <tr>
      

                    <th>Id</th>
                    <th>Transition Date</th>
                    <th>Transition Hour</th>
                    <th>Transport Type Id</th>
                    <th>Road Type</th>
                    <th>Line</th>
                    <th>Transfer Type</th>
                    <th>Number Of Passage</th>
                    <th>Number Of Passenger</th>
    </tr>
  </thead>
  <tbody>
    
     
      <?php
    include("baglanti.php");
    
    $sec="Select * From ocakayiulasim";
    $cek=$baglan->query($sec);
    if($cek->num_rows >0){
        while($sonuc=$cek->fetch_assoc()){
            echo "
            <tr>
            <td> ".$sonuc['id']."</td>
            <td> ".$sonuc['transition_date']."</td>
            <td> ".$sonuc['transition_hour']."</td>
            <td>".$sonuc['transport_type_id']."</td>
            <td>".$sonuc['road_type']."</td>
            <td>".$sonuc['line']."</td>
            <td>".$sonuc['transfer_type']."</td>
            <td>".$sonuc['number_of_passage']."</td>
            <td>".$sonuc['number_of_passenger']."</td>

           </tr>
            ";

            
        }
    }


    else{
        echo "veri tabanında veri yokk!!";
    }
?>
    
  </tbody>
</table>

<script type="text/javascript"> 
$(document).ready(function(){
  $(".tboxsearch").keyup(function(){
    var input=$(this).val();
    
    if(input!=""){
      $.ajax({

        url:"api.php",
        method:"POST",
        data:{input:input},

        success:function(data) {
          $(".search1").html(data);
          $(".search1").css("display","block");
        }

      });
    }
    else{
      $(".search1").css("display","none");
    }


  });

});

</script>

</body>
</html>