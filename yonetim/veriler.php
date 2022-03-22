<?php
        require_once '../baglan.php';
?>
                <div class="col-12 col-md-12 d-flex justify-content-between  ">
                        <div class="row ">
                      <?php
                        $katogeleri = $baglanti -> prepare("SELECT * FROM isler  WHERE
                                kategori_id=:kategori_id"   
                         );
                         $katogeleri->execute(array(
                                'kategori_id'=>$_POST['mybilgi']
                         ));
                          $c = $katogeleri ->fetchAll(PDO::FETCH_ASSOC);
                      ?>
                
                                <?php foreach($c as $x){?>
                              
                                        <div class="col-12  col-md-3 position-relative d-flex justify-content-center align-items-center row1 p-1   animate__animated animate__flipInY  ">
                                                <div class="col-8 col-md-6  position-absolute icerikyazisi"><?php echo $x["is_aciklama"] ?></div>
                                                <img class="img-fluid w-100 h-75" style="heigth:150px;" src="kategoriResim/<?php echo $x["kategoriResim"] ?>">
                                         </div>
                                <?php }  ?>

                        </div>
                </div>  
        </div>
        </div>

