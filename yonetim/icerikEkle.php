<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Document</title>
</head>
<body>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                             <form method="post"  enctype="multipart/form-data"  id="icerikEkleForm" class="form d-flex">
                                      
                                                <input type="text" class="form-control" name="icerikYazi">
                                                <input type="file" name="kategoriResim">
                                               <input type="hidden" name="detayİd" value="<?php echo $_GET['gelenid']?>">
                                                <button type="submit" class="btn btn-success">Ekle</button>
                                </form>
                        </div>
                </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
</body>
</html>