<?php
        include_once 'baglan.php';
         session_start();
        ob_start();
?>

<?php
        if(isset($_POST['login'])){
                $kadi = htmlspecialchars ($_POST['username']);
                $pass = htmlspecialchars ($_POST['pass']);
                $kullanicisor = $baglanti -> prepare("SELECT * from panel WHERE username=:username and pass=:pass");
                $kullanicisor -> execute(array(
                        'username' => $kadi,
                        'pass' => $pass
                ));
                $var  = $kullanicisor -> rowCount();
                if($var > 0) {
                        echo $_SESSION['normalgiris'] = $kadi;
                        header("Location:yonetim/mainpanel.php");
                }else{
                         header("Location:login.php?durum=hata");
                }
        }
?>