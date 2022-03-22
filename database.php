<?php
        require_once 'baglan.php';
?>


<?php
     

     if(isset($_POST['sliderBas'])){
      $output="";
        if($_FILES["sliderResim"]["size"]>0){
             $uploads_dir='sliderResim';
             $output="";
             @$tmp_name=$_FILES['sliderResim'] ["tmp_name"];
             @$name=$_FILES['sliderResim'] ["name"];

             $sayi = rand(1,1000000);
             $sayi2 = rand(1,100000);
             $sayi3=rand(10000,2000000);

             $sayilar=$sayi.$sayi2.$sayi3;
             $resimyolu=$sayilar.$name;
             @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
      
                $sliderEkle=$baglanti->prepare("INSERT INTO slider SET
                        sliderResim=:sliderResim,
                        sliderBaslik=:sliderBaslik
                ");
            $calistir =$sliderEkle->execute(array(
                        "sliderBaslik"=>$_POST['sliderBaslik'],
                        "sliderResim"=>$resimyolu
            ));

            if($calistir){ 
                        $output = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $output = "İşlem Hatasi";
         }

      $resp = array(
                'output'=>$output
      );
        echo json_encode($resp);
        }
} 


if(isset($_POST['idBilgi'])){

        $sil = $baglanti -> prepare("DELETE from slider  WHERE  id=:id");
        $kontrol = $sil -> execute(array(
                'id' => $_POST['idBilgi']
        ));

        if($kontrol){
                echo "İslem Basarili";
        }else{
                echo $_POST['idBilgi'];
        }
}


if(isset($_POST['kateno'])){
        $sil = $baglanti->prepare("DELETE from  kategori where kategori_id =:kategori_id");
        $kontrol = $sil ->execute(array(
                'kategori_id'=>$_POST['kateno']
        ));

        if($kontrol){
                echo "İslem Basarili";
        }else{
                echo $_POST['kateno'];
        }
}

if(isset($_POST['kateno'])){
        $katesil = $baglanti->prepare("DELETE from  isler where  kategori_id =:kategori_id");
        $kontrol = $katesil ->execute(array(
                'kategori_id'=>$_POST['kateno']
        ));

        if($kontrol){
                echo "İslem Basarili";
        }else{
                echo $_POST['kateno'];
        }
}

if(isset($_POST['promotionİd'])){
        $promotionDelete = $baglanti ->prepare(" DELETE from tanitim where id=:id");

        $controller = $promotionDelete->execute(array(
                'id'=>$_POST['promotionİd']
        ));

        if($controller){
                echo "İslem Basariyla tamalandı";
        }else{
                echo "Hatali İslem var tekrar deneyiniz";
        }
}






     if(isset($_POST['tanitimbas'])){
        if($_FILES["tanitimResim"]["size"]>0){
             $uploads_dir='tanitimResim';
             $output="";
             @$tmp_name=$_FILES['tanitimResim'] ["tmp_name"];
             @$name=$_FILES['tanitimResim'] ["name"];

             $sayi = rand(1,1000000);
             $sayi2 = rand(1,100000);
             $sayi3=rand(10000,2000000);

             $sayilar=$sayi.$sayi2.$sayi3;
             $resimyolu=$sayilar.$name;
             @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
      
                $tanitimEkle=$baglanti->prepare("INSERT INTO tanitim SET
                        baslik=:baslik,
                        icerik=:icerik,
                        resim=:resim
                ");
            $tanitimCalistir =$tanitimEkle->execute(array(
                        "baslik"=>$_POST['baslik'],
                        "icerik"=>$_POST['icerik'],
                        "resim"=>$resimyolu
            ));

            if($tanitimCalistir){ 
                        $output = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $output = "İşlem Hatasi";
         }

      $resp = array(
                'output'=>$output
      );
        echo json_encode($resp);
  }
}


if(isset($_POST['katebas'])){
        $output="";
        $kategoriEkle = $baglanti -> prepare("INSERT INTO kategori SET
                kategori_ad=:kategori_ad
        ");
        $kateCalistir = $kategoriEkle ->execute(array(
                "kategori_ad"=>$_POST['kategoriad']
        ));
         if($kateCalistir){ 
                        $output = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $output = "İşlem Hatasi";
         }

      $resp = array(
                'output'=>$output
      );
        echo json_encode($resp);
}


if(isset($_POST['detayİd'])){
              if($_FILES["kategoriResim"]["size"]>0){
             $uploads_dir='kategoriResim';
             $output="";
             @$tmp_name=$_FILES['kategoriResim'] ["tmp_name"];
             @$name=$_FILES['kategoriResim'] ["name"];

             $sayi = rand(1,1000000);
             $sayi2 = rand(1,100000);
             $sayi3=rand(10000,2000000);

             $sayilar=$sayi.$sayi2.$sayi3;
             $resimyolu=$sayilar.$name;
             @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
      
                $detayEkle=$baglanti->prepare("INSERT INTO isler SET
                        is_aciklama=:is_aciklama,
                        kategori_id=:kategori_id,
                        kategoriResim=:kategoriResim
                ");
            $detayCalistir =$detayEkle->execute(array(
                        "is_aciklama"=>$_POST['icerikYazi'],
                        "kategori_id"=>$_POST['detayİd'],
                        "kategoriResim"=>$resimyolu
            ));

            if($detayCalistir){ 
                        $output = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $output = "İşlem Hatasi";
         }

      $resp = array(
                'output'=>$output
      );
        echo json_encode($resp);
  }
}




 if(isset($_POST['referansBas'])){
        if($_FILES["referansResim"]["size"]>0){
             $uploads_dir='referansResim';
             $output="";
             @$tmp_name=$_FILES['referansResim'] ["tmp_name"];
             @$name=$_FILES['referansResim'] ["name"];

             $sayi = rand(1,1000000);
             $sayi2 = rand(1,100000);
             $sayi3=rand(10000,2000000);

             $sayilar=$sayi.$sayi2.$sayi3;
             $resimyolu=$sayilar.$name;
             @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
      
                $referansEkle=$baglanti->prepare("INSERT INTO referanslar SET
                        baslik=:baslik,
                        resim=:resim
                ");
            $referansCalistir =$referansEkle->execute(array(
                        "baslik"=>$_POST['baslik'],
                        "resim"=>$resimyolu
            ));

            if($referansCalistir){ 
                        $output = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
                        
           }else{
                       $output = "İşlem Hatasi";
         }

      $resp = array(
                'output'=>$output
      );
        echo json_encode($resp);
  }
}







?>

