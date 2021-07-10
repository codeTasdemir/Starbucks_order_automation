<?php 
  include_once "connection.php";
  error_reporting(0);
  $query_visitor = "Select * from site_visitors";
  $result_visitor_query = mysqli_query($con,$query_visitor);
  $total_visitor = mysqli_num_rows($result_visitor_query);


  if( $_SERVER['HTTP_REFERER'] == "http://localhost/starbucks_otomasyon/index.php" ){

  $visitor_counter = "UPDATE site_visitors SET visit_counts = visit_counts +1";
  $execute = mysqli_query($con,$visitor_counter);
  }

?>



<?php
  session_start();
  ob_start();
  define("DATA","DataS/");
  require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kahve otomasyonu</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stil.css">
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    
     <?php
      include_once(DATA."navbar.php");
     ?>    
                 
    </div>
    <div class="container">
      <div class="maker">  
        <img class="resim2" src="coffeeman.png" alt="coffeeman">
      </div>
      <div class="yazı">
        <br><br><br><br><br>
        <hr>
      <p class="lead">
          Merhaba, sitemizde isteğin mükemmel Starbucks kahvesini dilediğin kombinasyonlarla oluşturabilirsin. Kahveni seç 
          kısmına tıkla ve yapmak istediğini seç mükemmel kahveni oluşturmaya sadece bir adım kaldı...
          <br><br>
          Beğenirsen eğer sayfamızı arkadaşlarına da bahsetmeyi unutma ! istek,öneri ve şikayetlerin için iletişim ksımını 
          kullanabilirsin.
          </p>
          <hr>
      </div>   
    </div>
    
  <?php
    include_once(DATA."footer.php");
  ?>
</body>
</html>