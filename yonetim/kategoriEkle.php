<?php
        require_once '../baglan.php';
        require_once  '../database.php';
?>
<?php  
                $kategoriBilgileri =$baglanti->prepare("SELECT *  FROM kategori");
                $kategoriBilgileri ->execute()
  ?>

      

           
                        <div id="basariliAlan" class="col-md-12 alert alert-success"></div>
                                <div class="col-md-12   bg-dark  d-flex  d-flex justify-content-center align-items-center">
                                        <form method="post"   enctype="multipart/form-data"  id="kategoriEkleForm" class="form d-flex">
                                                 <input type="text" class="form-control " name="kategoriad">
                                                 <input type="hidden" name="katebas">
                                                <button type="submit" class="btn btn-success">Ekle</button>

                                      </form>
                        </div>
                        
               

           
                        <div class="col-md-12 ">
                                <table class="table  table table-striped">
                                       <thead >
                                                <tr>
                                                        <th>Kategori Adı</th>
                                                        <th>İçerik Ekle</th>
                                                        <th>Kategori İçeriklerini Gör</th>
                                                        <th>Sil</th>
                                                </tr>
                                       </thead>
                                       <tbody>
                                       <?php
                                              
                                                 while($kategoriCek = $kategoriBilgileri -> fetch(PDO::FETCH_ASSOC)){                                                                                         
                                       ?>
                                                <tr>
                                                        <td>
                                                                <h6><?php echo $kategoriCek['kategori_ad']?></h6>
                                                        </td>
                                                        <td>
                                                                <button class="btn btn-success"><a class="btn btn-success" href="icerikEkle.php?gelenid=<?php echo $kategoriCek['kategori_id']?>">İçerik Ekle</a></button>
                                                        </td>
                                                         <td>
                                                                <button class="btn btn-primary"><a class="btn btn-primary" href="icerikListesi.php?gelendetayid=<?php echo $kategoriCek['kategori_id']?>">İçerik Gör</a></button>
                                                        </td>
                                                        <td>
                                                                 <button class="btn btn-danger kategoriSil" id="<?php echo $kategoriCek['kategori_id']?>">Sil</button>
                                                        </td>
                                                </tr>
                                                <?php  }?>
                                       </tbody>
                                </table>
                        </div>
                </div>
        </div>



