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
<link rel="stylesheet" href="dist/css/animsition.css">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@300&family=Josefin+Sans:ital,wght@1,300&family=Open+Sans:ital,wght@1,300&family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@300&family=Josefin+Sans:ital,wght@1,300&family=Open+Sans:ital,wght@1,300&family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">   
<link rel="stylesheet" type="text/css" href="Css/style.css">
<link rel="stylesheet" type="text/css" href="Css/swiper.css">
<link rel="stylesheet" type="text/css" href="Css/kategori.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<title>Document</title>
  </head>
<body class="animsition   "    data-animsition-overlay="true"
  data-animsition-in-class="overlay-slide-in-top"
  data-animsition-in-duration="5000"
>


 
    <div class="container-fluid" id="mobilMenuCont">
      <div class="row">
                <?php require_once 'mobilmenu.php'?>
      </div>
    </div>
  

<div class="container-fluid position-fixed" style="z-index: 999; " id="desktopMenuCont">
     <div class="row ">
                <?php require_once 'desktopMenu.php'?>
        </div>
</div>
  

   <div class="container-fluid ">
        <div class="row">
                <div class="col-12 col-md-12 p-0 d-flex justify-content-start align-items-center position-relative">
                        <h1 class="position-absolute text-white ml-5">Projeler</h1>
                        <img class="img-fluid" src="head.jpg">
                </div>
        </div>
   </div>

   <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                        <div class="row" id="msg" style="background-color:#0b0b0b;" >
                                <div class="col-md-12 p-5">
                                        <p class="">MOVE Mimarlık, çeşitli alanlarda TASARLAYIP UYGULADIĞI projeler ile tecrübe ve deneyimli bir profile sahiptir. Çağın gerektirdiği yeni mimari tasarımların bilincinde olup oluşturulacak projelerde bu detayları gözardı etmeyerek ve detaylı bir şekilde ince eleyip sık dokuyan disiplininden kopmayan bir şirket karakterine sahiptir.</p>
                                </div>
                                   <div class="col-md-12 p-5">
                                        <p class="">Araştırmacı, gelişime açık, yenilikçi ve analitik düşünüp çözüm odaklı projeler üreten tecrübeli bir ekibe sahip olan MOVE Mimarlık, çözüm ortağı olduğu firmaların marka ve kalite değerlerini benimseyip bu değerlerin çıtasını yükseltmektedir. Böylece müşterilerinin ve firmaların beklentilerini yüksekte tutmaktadır. Yapıtlarımızdaki kalite, çalışanlarımızın kalitesiyle başlar.Bu nedenle en önemli sermayemiz her daim NİTELİKLİ İNSAN KAYNAĞIDIR. Bu da bizi her zaman bir adım öne taşımakla birlikte mimaride doğa ve insan merkezli bir çerçeveye oturtmayı SAĞLAMIŞTIR.</p>
                                </div>
                                 <div class="col-md-12 p-5">
                                        <p class="">Yılların kattığı deneyim ve tecrübe ile birlikte çalışma sahalarında her zaman bir adım önde gösterilen MOVE Mimarlık ekibi, yaptığı çalışmalarıyla referanslarına gün geçtikçe bir yenisini daha ekliyor. Referans olarak gösterime sunulan çalışmalar bir sonraki yenilikçi girişimin adeta habercisi olup kendilerini müşterilerine sunuyor. Geniş müşteri portföyü ile sürekli iletişim kurup onların istemiş oldukları çalışmaları, olması gereken mimari çizgilere ulaştırmayı hedef haline getirmiş ve çalışmalarını aynı özveri ile teslim etmiştir. Teslim ettiği çalışmalar müşterileri tarafından büyük beğeni bulmuş ve övgüyle bahsedilmiştir.
</p>
                                </div>
                        </div>
                </div>
        </div>
   </div>

<style>
        #msg{
                font-size:2.3vh;
                color:white;
                line-height:4vh;
        }
</style>

<?php  require_once "footer.php"  ?>

</body>
</html>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="dist/js/animsition.min.js"></script>
<script src="main.js"></script>
<script src="yonetim/ajax.js"></script>


