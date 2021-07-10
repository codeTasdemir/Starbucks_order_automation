<?php
  session_start();
  ob_start();

  define("DATA","DataS/");


?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stil.css">
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <?php
      include_once(DATA."navbar.php");
     ?> 

    <div class="container">
        <div class="resim">
            <img src="pngkey.com-coffee-mug-png-71283.png" class="rounded float-start" alt="...">
        </div>
        <div class="yazı">
            <br>
            <h1 class="display-6">Öyle kafanızda çok büyütmeyin çok fazla büyüyemedik :D
                sadece içinde ki gizli kahveseveri çıkarmaya çalışıyoruz... <br><br> Starbucks bunu beğendi <span style="font-size: 40px; color: rgb(151, 163, 163);" class="material-icons">
                    thumb_up
                    </span>
            </h1>
        </div>       
    </div>
    </div>

    <?php
    include_once(DATA."footer.php");
    ?>
</body>
</html>