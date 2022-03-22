    <?php
                require_once "../baglan.php";
                require_once  '../database.php';
?>        
        
        <div id="basariliAlan2" class="col-md-6 alert alert-success"></div>
                <div class="col-md-9">
                        <form    enctype="multipart/form-data"  id="referansEklemeForm" class="form">
                                <div class="form-group">
                                  <label for="baslik"></label>
                                  <input type="text" name="baslik" id="baslik" class="form-control" placeholder="Referans Baslik" aria-describedby="helpId">
                                </div>
                                
                                <div class="form-group">
                                  <label for="resim"></label>
                                  <input id="resim" type="file" name="referansResim">
                                </div>
                                <button type="submit" class="btn btn-success">Gönder</button>
                                <input type="hidden" name="referansBas">
                        </form>
                </div>
        