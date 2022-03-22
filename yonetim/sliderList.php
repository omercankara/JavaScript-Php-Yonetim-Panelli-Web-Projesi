         <?php
                require_once "../baglan.php"
        ?>
           <div class="col-md-12 mt-5">
                        <div class="row">
                                <table class="table table-striped">
                                <thead>
                                        <tr>
                                                <th>Slider Baslik</th>
                                                <th>Slider Resim</th>
                                                <th>İşlem</th>
                                        </tr>
                                </thead>
                                <?php
                                        $slidercek = $baglanti ->Prepare("SELECT * FROM slider ORDER BY id");
                                        $slidercek -> execute();
                                ?>
                                <tbody>
                                        <?php
                                                while($sliderGetir = $slidercek -> fetch(PDO::FETCH_ASSOC)){
                                 ?>
                                                <tr>
                                                 <td><?php echo $sliderGetir['sliderBaslik']?></td>
                                                <td><img style="width:150px;" class="img-fluid" src="../sliderResim/<?php echo $sliderGetir['sliderResim']?>"></td>
                                                <td><button class="btn btn-sm btn-danger sil" id="<?php echo $sliderGetir['id']?>">Sils</button></td>
                                                </tr>
                                        <?php } ?>

                                </tbody>
                                </table>
                        </div>
                </div>