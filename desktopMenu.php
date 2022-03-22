   <div class="col-md-12 d-flex justify-content-between data  " id="desktopMenuCont2" style="height:90px;">
                        <div class="col-md-3  d-flex justify-content-center"><img class="img-fluid " src="anasayfa2/anasayfa201.png"></div>
                        <div class="col-md-9  mt-2  d-flex justify-content-start align-items-center">
                                         <ul  id="desktopMenuUL" class="ml-4">
                                                <li ><a class="itemMenu" style="font-family: 'EB Garamond', serif; font-size: 3vh;  " href="index.php">Anasayfa</a></li>
                                                <li ><a class="itemMenu "    style="font-family: 'EB Garamond', serif; font-size: 3vh;  " href="projeler.php">Proje</a></li>
                                                <li ><a class="itemMenu" style="font-family: 'EB Garamond', serif; font-size: 3vh; " href="referanslar.php">Referanslar</a></li>
                                                <li ><a class="itemMenu" style="font-family: 'EB Garamond', serif; font-size: 3vh;  " href="hakkimizda.php">hakkimizda</a></li>
                                                <li ><a class="itemMenu" style="font-family: 'EB Garamond', serif; font-size: 3vh;  " href="">İletişim</a></li>
                                         </ul>   
                        </div> 
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="dist/js/animsition.min.js"></script>
<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,

    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>