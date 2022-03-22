<?php
        require_once '../baglan.php';
        require_once  '../database.php';
?>

<?php   
                $promotionContact = $baglanti ->prepare("SELECT * FROM tanitim");
                $promotionContact -> execute()
 ?>


        <div id="basariliAlan" class="col-md-6 alert alert-success"></div>
                <div class="col-md-12">
                        <form    enctype="multipart/form-data"  id="tanitimEklemeForm" class="form">
                                <div class="form-group">
                                  <label for="baslik"></label>
                                  <input type="text" name="baslik" id="baslik" class="form-control" placeholder="Tanitim Baslik" aria-describedby="helpId">
                                </div>
                                 <div class="form-group">
                                  <label for="baslik"></label>
                                  <input type="text" name="icerik" id="baslik" class="form-control" placeholder="Tanitici Yazi" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                  <label for="resim"></label>
                                  <input id="resim" type="file" name="tanitimResim">
                                </div>
                                <button type="submit" class="btn btn-success">Gönder</button>
                                <input type="hidden" name="tanitimbas">
                        </form>

                        <table class="table">
                                <thead>
                                        <tr >
                                                <th>Tanitim Baslik</th>
                                                <th >Tanitim Yazisi</th>
                                                <th class="d-flex justify-content-center">Tanitim Resimi</th>
                                                <th>İşlem</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                                while($getPromotion = $promotionContact ->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                                <tr>
                                                        <td><?php echo $getPromotion['baslik']   ?></td>
                                                        <td ><?php echo $getPromotion['icerik']?></td>
                                                        <td  class="d-flex justify-content-center"><img class="img-fluid " style="width:150px;" src="../tanitimResim/<?php echo $getPromotion["resim"] ?>"></td>
                                                        <td><button class="btn btn-danger promotionDelete" id=<?php echo $getPromotion['id']?>>Sil</button></td>
                                                </tr>

                                        <?php }?>
                                </tbody>
                        </table>
                </div>
        