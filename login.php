<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
        require_once 'baglan.php';
        session_start();
 
?>
     <div class="container-fluid">
                <div class="row">
                  
                        <div class="col-md-12  d-flex flex-column justify-content-center align-items-center bck" style="height: 100vh;">
                     
                                        <div class="col-md-3  girisPaneli  p-5" >
                      
                                        <form class="form" method="post" action="girisDatabase.php">
                                                <?php
                                                   if(@$_GET['durum']=="hata"){
                                                                echo '<div class="alert alert-danger" id="girisHatasi">OOPPS ! Yetkisiz Giriş Tespit Edildi</div>';
                                                  }
                                                ?>  
                                                <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                                        <label>Kullanıcı Adı</label>
                                                        <input placeholder="Yönetici Kullanıcı Adı" name="username" class="form-control mt-2" type="text">
                                                       
                                                </div>
                                                 <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                                        <label class="mt-3">Parola</label>
                                                        <input placeholder="Yönetici Parolası" name="pass"  class="form-control mt-2" type="password">
                                                </div>
                                                  <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                                        <button name="login" id="gir" type="submit" onClick="dellİtem()" class="btn btn-info">Oturuma Giriş Yap</button>
                                                </div>
                                        </form>
                                        </div>
                        </div>
                </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script>
     
      const myTimeout = setTimeout(myGreeting, 1000);
      var panel =  document.getElementById('girisHatasi')
      var opacity = document.getElementById('girisHatasi')

        function myGreeting(){
               panel.style.transition = "all 1s";  
               opacity.style.opacity="0";
          }
             function delİtem(){
                       clearTimeout(myTimeout);
         }       

          

     </script>
</body>
</html>
<
<style>
body{
        background-image: url(bck.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
       
}
#girisHatasi{
        transition:1s ease;
}
.girisPaneli{
        border-radius: 10vh;
}

.girisPaneli::after {
  content: "";
background-color: purple;
  border-radius: 5vh;
  color: red;
  font-weight: bold;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  z-index: -1;
  opacity: 0.3;
  left: 0;
  right: 0;
}

p
</style>


