<div class="container-fluid" style="background-color:#18191b;">
        <div class="row">
                <div class="col-12 col-md-12">
                      <div class="row">
                      <?php
                        while($tanitimCek = $tanitimBilgileri ->fetch(PDO::FETCH_ASSOC)){
                      ?>

                                 <div class="col-12 col-md-4  p-4">
                                        <div class="row">
                                                        <div class="col-12 col-md-6"><p class="text-white"><?php echo $tanitimCek['baslik']?></p></div>
                                                        <div class="col-12 col-md-6"><p style="font-family: 'Open Sans', sans-serif;" class="text-white" style="line-height: 25px;"><?php echo $tanitimCek['icerik']?></p></div>
                                                        <div class="col-12 col-md-6 bg-primary ">
                                                                <img class="img-fluid h-100" src="tanitimResim/<?php echo $tanitimCek['resim']?>">
                                                          </div>
                                        <div class="col-md-12 mt-2"><button class="btn btn-dark">Devamı</button></div>
                                        </div>
                                 </div>

                        <?php } ?>                          
                      </div>
                </div>
        </div>
</div>