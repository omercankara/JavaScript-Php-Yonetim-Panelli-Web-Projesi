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
                                        <p class="">MOVE Mimarl??k, ??e??itli alanlarda TASARLAYIP UYGULADI??I projeler ile tecr??be ve deneyimli bir profile sahiptir. ??a????n gerektirdi??i yeni mimari tasar??mlar??n bilincinde olup olu??turulacak projelerde bu detaylar?? g??zard?? etmeyerek ve detayl?? bir ??ekilde ince eleyip s??k dokuyan disiplininden kopmayan bir ??irket karakterine sahiptir.</p>
                                </div>
                                   <div class="col-md-12 p-5">
                                        <p class="">Ara??t??rmac??, geli??ime a????k, yenilik??i ve analitik d??????n??p ????z??m odakl?? projeler ??reten tecr??beli bir ekibe sahip olan MOVE Mimarl??k, ????z??m orta???? oldu??u firmalar??n marka ve kalite de??erlerini benimseyip bu de??erlerin ????tas??n?? y??kseltmektedir. B??ylece m????terilerinin ve firmalar??n beklentilerini y??ksekte tutmaktad??r. Yap??tlar??m??zdaki kalite, ??al????anlar??m??z??n kalitesiyle ba??lar.Bu nedenle en ??nemli sermayemiz her daim N??TEL??KL?? ??NSAN KAYNA??IDIR. Bu da bizi her zaman bir ad??m ??ne ta????makla birlikte mimaride do??a ve insan merkezli bir ??er??eveye oturtmay?? SA??LAMI??TIR.</p>
                                </div>
                                 <div class="col-md-12 p-5">
                                        <p class="">Y??llar??n katt?????? deneyim ve tecr??be ile birlikte ??al????ma sahalar??nda her zaman bir ad??m ??nde g??sterilen MOVE Mimarl??k ekibi, yapt?????? ??al????malar??yla referanslar??na g??n ge??tik??e bir yenisini daha ekliyor. Referans olarak g??sterime sunulan ??al????malar bir sonraki yenilik??i giri??imin adeta habercisi olup kendilerini m????terilerine sunuyor. Geni?? m????teri portf??y?? ile s??rekli ileti??im kurup onlar??n istemi?? olduklar?? ??al????malar??, olmas?? gereken mimari ??izgilere ula??t??rmay?? hedef haline getirmi?? ve ??al????malar??n?? ayn?? ??zveri ile teslim etmi??tir. Teslim etti??i ??al????malar m????terileri taraf??ndan b??y??k be??eni bulmu?? ve ??vg??yle bahsedilmi??tir.
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


