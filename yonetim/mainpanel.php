<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <?php
   session_start();
         ob_start();
        include_once "../baglan.php"
?>

  <?php
                require_once "../baglan.php";        
?>

  <?php
        $kullaniciSor = $baglanti ->prepare("SELECT * from panel where username=:username");
        $kullaniciSor ->execute(array(
                'username'=>$_SESSION['normalgiris'], //login den buraya gelen session database de ki bilgi ile uyuşuyor mu ?

        ));
        $kullaniciCek = $kullaniciSor->fetch(PDO::FETCH_ASSOC);
        $çeksorguyu = $kullaniciSor->rowCount();
        if($çeksorguyu==0){
                  header("Location:index?durum=izinsizgiris");
        }
?>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 bg-dark d-flex justify-content-center " style="height:1080px;">
          <?php
                        require_once 'menu.php'
           ?>
        </div>
        <div class="col-md-9" id="sliderEkleContaineri" style="display:;">
                <?php require_once 'sliderEkle.php'?>
        </div>
   

         <div class="col-md-9"  id="referansEkleContaineri" style="display:none;">
                <?php require_once 'referansEkle.php'?>
        </div>
      
        <div class="col-md-9"  id="tanitimEkleContaineri" style="display:none;">
              <?php require_once 'tanitimEkle.php'?>
        </div>

        <div class="col-md-9"  id="kategoriEkleContaineri" style="display:none;">
                <?php require_once 'kategoriEkle.php'?>
        </div>

      


      </div>
    </div>

<style>
       
</style>

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="ajax.js"></script>
  </body>
</html>
