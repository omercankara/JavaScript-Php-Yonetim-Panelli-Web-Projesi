<?php
        require_once 'baglan.php';
       
?>
<?php
        $sliderBilgileri = $baglanti -> prepare("SELECT * FROM slider order by id asc");
        $sliderBilgileri-> execute();
?>


<?php
        $kategoriCek = $baglanti -> prepare("SELECT * FROM kategori order by kategori_id asc");
        $kategoriCek-> execute();
?>

<?php
        $referansCek = $baglanti ->prepare("SELECT * FROM referanslar ORDER BY id asc");
        $referansCek ->execute();
?>


<?php
        $tanitimBilgileri = $baglanti -> prepare("SELECT * FROM tanitim order by id asc");
        $tanitimBilgileri-> execute();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="dist/css/animsition.min.css">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@300&family=Josefin+Sans:ital,wght@1,300&family=Open+Sans:ital,wght@1,300&family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@300&family=Josefin+Sans:ital,wght@1,300&family=Open+Sans:ital,wght@1,300&family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">   
<link rel="stylesheet" type="text/css" href="Css/style.css">
<link rel="stylesheet" type="text/css" href="Css/swiper.css">
<link rel="stylesheet" type="text/css" href="Css/kategori.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<title>Document</title>
  </head>
  <body id="datas">



    <div class="container-fluid" id="mobilMenuCont">
      <div class="row">
                <?php require_once 'mobilmenu.php'?>
      </div>
    </div>
  

<div class="container-fluid position-fixed" style="z-index: 999;" id="desktopMenuCont">
     <div class="row">
                <?php require_once 'desktopMenu.php'?>
        </div>
</div>



<!--Carousel Başlangıc-->
<div class="container-fluid">
        <div class="row">
                <div class="col-12 col-md-12 p-0 ">
                        <div class="swiper mySwiper ">
                                <div class="swiper-wrapper ">
                                <?php
                                        while($sliderCek = $sliderBilgileri ->fetch(PDO::FETCH_ASSOC)){      
                                ?>
                                        <div class="swiper-slide position-relative">
                                                <img class="" src="sliderResim/<?php echo $sliderCek['sliderResim']?>">
                                                <div class="col-md-12 position-absolute"><h1 class="text-white"><?php echo $sliderCek['sliderBaslik']?></h1></div>
                                        </div>
                                        <?php } ?>        
                                </div>                            
                        </div>
                </div>
        </div>
</div>
<!--Carousel Sonu-->


<!--SLOGAN BAŞLANGIC-->
<div class="container-fluid">
        <div class="row">
                <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-md-12  p-5 d-flex justify-content-center align-items-center" style="background-color:#18191b;">
                        <h3 style="font-family: 'Inter', sans-serif;" class="mainHeaderText mt-2" style="letter-spacing: 0.2vh;">ANKARA RİVA İÇ MİMARLIK</h3>
                </div>
                <hr class="bg-danger">
        </div>
 </div>
<!--SLOGAN BAŞLANGIC SONU-->




<!--BİLGİLENDİRME RESİMLERİ VE YAZILAR BAŞLANGIC-->
<div class="container-fluid " style="background-color:#18191b;">
                <div class="col-12 col-md-12 ">
                      <div class="row  p-5 "  data-aos="fade-right"
     data-aos-offset="400"
     data-aos-easing="ease-in-sine" data-aos-duration="1000" >
                       <?php
                        while($tanitimCek = $tanitimBilgileri ->fetch(PDO::FETCH_ASSOC)){
                      ?>
                                <div class="col-12 col-md-4 p-5">
                                        <div class="col-12 col-md-12  ">
                                                <h4 class="designHeader  ">Tasarım</h4>
                                        </div>
                                        <div class="col-12  w-100 col-md-12  ">
                                                <p class="designContent">İç mimarlık tasarımı konusunda uzman ekip kadrosu ile tam zamanlı olarak çalışıyoruz. 
                                                Projelerimizde müşterilerimizin istekleri doğrultusunda en kalit...</p>
                                        </div>
                                        <div class="col-12 col-md-12  p-0">
                                                <img class="img-fluid p-0" src="tanitimResim/<?php echo $tanitimCek['resim']?>">
                                        </div>
                                </div>
                                 <?php } ?>    
                      </div>
                </div>
        </div>
</div>
<!--BİLGİLENDİRME RESİMLERİ VE YAZILAR SONU-->


<!--KATEGORİ BUTONLARI BAŞLANGIC-->
 <div class="container-fluid">
        <div class="row" style="background-color: #333;">
                <div class="col-12 col-md-12 d-flex justify-content-center p-4 ">
                        <form action="veriler.php"  enctype="multipart/form-data" id="form1">
                <?php
                        while($kategori = $kategoriCek -> fetch(PDO::FETCH_ASSOC)){
                ?>
                      
                        <button type="submit"  data-aos="fade-up" data-aos-duration="1000"  class="btn btn-dark mr-2 veri" name="kategoribilgi" id="<?php echo $kategori['kategori_id']?>" value="<?php echo $kategori['kategori_id']?>">
                                <?php echo $kategori['kategori_ad']?>
                        </button>

                       <?php }?>
                </form>
                </div>
        </div>
</div>
<!--KATEGORİ BUTONLARI SONU-->



<!--YAPILAN İŞLER BAŞLANGIC-->
<div class="container-fluid " >
        <div class="row" style="background-color: #333;">
                <div class="col-md-12 "  id="newDataTest"></div>
        </div>
</div>
<!-- YAPILAN İŞLER SONU-->


<!-- PROJELER BAŞLANGIÇ-->
<div class="container-fluid">
        <div class="row">
                <div class="col-12 col-md-12 bg-warning d-flex justify-content-center align-items-center p-5">
                        <button class="btn  border border-dark w-50 proje">Projelerimiz</button>
                </div>
        </div>  
</div>
<!-- PROJELER SONU-->


<!-- REFERANSLAR BAŞLANGIÇ-->
        <div class="container-fluid" style="background-color:#18191b;">
        <div class="row">
                <div class="col-12 col-md-12 p-5">
                <h1 class="text-center text-white"  data-aos="fade-up" data-aos-duration="1000">Referanslar</h1>
                      <div class="row">
                      <?php
                        while($referansGetir = $referansCek ->fetch(PDO::FETCH_ASSOC)){
                     
                      ?>

                                 <div class="col-12 col-md-4 p-4 " data-aos="fade-right"data-aos-offset="400"  data-aos-easing="ease-in-sine" data-aos-duration="1000" >
                                        <div class="col-12 col-md-12   "><p class="text-white text-center"><?php echo $referansGetir['baslik']?></p></div>
                                        <div class="col-md-12 w-100  d-flex justify-content-center align-items-center">
                                                <img class="img-fluid w-75" src="referansResim/<?php echo $referansGetir['resim']?>">
                                        </div>
                                 </div>

                        <?php } ?>            
                          <div class="col-12 col-md-12  d-flex justify-content-center "><button class="btn btn-dark">Tümünü Gör</button></div>              
                      </div>
                </div>
        </div>
</div>
<!-- REFERANSLAR SONU-->

<?php  require_once "footer.php"  ?>





<style>
        body{
                background-color:black;
        }
        .proje{
                transition:1s ease;
        }
        .proje:hover{
                background-color:black !important;
                color:white !important;
                transition:1s ease;
        }
        
     
</style>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="main.js"></script>



<script src="yonetim/ajax.js"></script>
<script>

        $(document).ready(function(){
                         var mybilgi = $(".veri").attr("id"); //attr ile istenilen özelligi al   
                        $.ajax({
                                type: 'POST',
                                  url:'yonetim/veriler.php',
                                data:{'mybilgi':mybilgi}, // id bilgisini gönder
                                success:function(myresp){
                                        $('#newDataTest').html(myresp) //dönen veriyi bas 
                                }
                        })                
        })
AOS.init();
AOS.refresh();
</script>
<script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
        },
        speed: 10000,
        effect: "cube",
        grabCursor: true,
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>
  </body>
</html>


