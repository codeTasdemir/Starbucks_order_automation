<?php
  session_start();
  ob_start();
  define("DATA","DataS/");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

    <div class="container">
    <div class="row">
      <h1 class="display-6">Latte Kahveler</h1>
      <hr class="my-4">
      <?php 
        require("connection.php");
        $query1 = "Select * from about_coffee where type_id=1";
        $data1 =  mysqli_query($con,$query1);
        $img="c:yonetimPaneli/image/3.JPG";

        $query2 = "Select * from about_coffee where type_id=2";
        $data2 =  mysqli_query($con,$query2);

        $query3 = "Select * from about_coffee where type_id=3";
        $data3 =  mysqli_query($con,$query3);
        
        $query4 = "Select * from about_coffee where type_id=4";
        $data4 =  mysqli_query($con,$query4);

        $query5 = "Select * from about_coffee where type_id=5";
        $data5 =  mysqli_query($con,$query5);

        $query6 = "Select * from about_coffee where type_id=6";
        $data6 =  mysqli_query($con,$query6);

        $query7 = "Select * from about_coffee where type_id=7";
        $data7 =  mysqli_query($con,$query7);
        
        while($part1 = mysqli_fetch_row($data1)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part1[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part1[2]; ?></h5>
                    <p class="card-text"><?php  echo $part1[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <h1 class="display-6">Mocha Kahveler</h1>
      <hr class="my-4">
       <?php 
       while($part2 = mysqli_fetch_row($data2)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part2[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part2[2]; ?></h5>
                    <p class="card-text"><?php  echo $part2[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>   
    </div>
    <div class="row">
        <h1 class="display-6">Macchiato Kahveler</h1>
      <hr class="my-4">
       <?php 
       while($part3 = mysqli_fetch_row($data3)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part3[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part3[2]; ?></h5>
                    <p class="card-text"><?php  echo $part3[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>   
    </div>
    <div class="row">
        <h1 class="display-6">Americano Kahveler</h1>
      <hr class="my-4">
       <?php 
       while($part4 = mysqli_fetch_row($data4)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;}">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part4[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part4[2]; ?></h5>
                    <p class="card-text"><?php  echo $part4[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>   
    </div>
    <div class="row">
        <h1 class="display-6">Filtre Kahveler</h1>
      <hr class="my-4">
       <?php 
       while($part5 = mysqli_fetch_row($data5)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;}">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part5[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part5[2]; ?></h5>
                    <p class="card-text"><?php  echo $part5[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>   
    </div>
    <div class="row">
        <h1 class="display-6">Sıcak Çikolatalar</h1>
      <hr class="my-4">
       <?php 
       while($part6 = mysqli_fetch_row($data6)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;}">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part6[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part6[2]; ?></h5>
                    <p class="card-text"><?php  echo $part6[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>   
    </div>
    <div class="row">
        <h1 class="display-6">Frapppucino Kahveler</h1>
      <hr class="my-4">
       <?php 
       while($part7 = mysqli_fetch_row($data7)){ ?>
        <div class="card-columns" style="display:flex;  max-width:25ch; max-height:55ch; float:left; margin-right: 30px; margin-bottom:50px;}">
          <div class="card">
              <?php echo ' <img class="card-img-top" src="yonetimPaneli/image/'.$part7[1].'" >'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo  $part7[2]; ?></h5>
                    <p class="card-text"><?php  echo $part7[3]; ?></p>
              </div>
          </div>
        </div>
        <?php } ?>   
    </div>
    </div>      
   
    </div>
    <?php
    include_once(DATA."footer.php");
    ?>

</body>
</html>