
        <div id="basariliAlan" class="col-md-12 alert alert-success"></div>
                <div class="col-md-12">
                        <form method="post"   enctype="multipart/form-data"  id="sliderEkleForm" class="form">
                                <div class="form-group">
                                  <label for="baslik">Slider Açıklamasını Giriniz</label>
                                  <input type="text" name="sliderBaslik" id="baslik" class="form-control" placeholder="Slider Baslik" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                  <label for="resim">Slider Görüntüsünü Ekleyiniz.</label>
                                  <input id="resim" type="file" name="sliderResim">
                                </div>
                                <input type="submit" class="btn btn-success"></button>
                                <input type="hidden" name="sliderBas">
                        </form>
                </div>

           <div  id="sliderListCont">
                    <?php require_once 'sliderList.php' ?>     
           </div>
  
<style>
#basariliAlan{
        display:none;
}

li  
      {
                list-style-type: none;
                display: inline;
        }
       
</style>
