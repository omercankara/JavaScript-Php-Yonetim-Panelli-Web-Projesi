<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
<?php
        require_once '../baglan.php';
        require_once  '../database.php';
?>
       <?php
                                        $id = $_GET['gelendetayid'];
                                        $detayBilgileri = $baglanti->prepare("SELECT *  FROM isler WHERE
                                                 kategori_id=:kategori_id 
                                        ");
                                         $detayBilgileri -> execute(array(
                                                'kategori_id'=>$id
                                        ));
                                        ?>

        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                        <table class="table ">
                        <thead>
                                        <tr>
                                                <th scope="col">Aciklama</th>
                                                <th class="d-flex justify-content-center" scope="col">Resim</th>    
                                         </tr>
                        </thead>
                                <tbody>
                                          <?php
                                                while($detayCek = $detayBilgileri->fetch(PDO::FETCH_ASSOC)){
                                          ?>
                                         <tr>     
                                                <td> <?php echo $detayCek["is_aciklama"] ?> </td>
                                                <td class=" d-flex justify-content-center"><img class="img-fluid" style="width:250px;" src="../kategoriResim/<?php echo $detayCek["kategoriResim"] ?>"></td>
                                         </tr>
                                   <?php  }?>
                                </tbody>
                                </table>
                        </div>
                </div>
        </div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>