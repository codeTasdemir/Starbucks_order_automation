<?php
  session_start();
  ob_start();
  define("DATA","DataS/");
  require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="javasCode.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kahve otomasyonu</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stil.css">
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
</head>
<body>
<?php
      include_once(DATA."navbar.php");
     ?>  

   
        <br>
        <br>
          
        <?php
         
          $query1 = "select * from coffee_type";
          $query2 = "select * from size_name";
          $query3 = "select * from sauce_name";
          $query4 = "select * from milk_name";
          $query5 = "select * from sugar_name";
          $query6 = "select * from espresso_choice";
          $query7 = "select * from coffee_name  ";
          


          $exec1 = mysqli_query($con,$query1); 
          $exec2 = mysqli_query($con,$query2); 
          $exec3 = mysqli_query($con,$query3); 
          $exec4 = mysqli_query($con,$query4); 
          $exec5 = mysqli_query($con,$query5); 
          $exec6 = mysqli_query($con,$query6);
          $exec7 = mysqli_query($con,$query7);
    
        ?>


        <div class="container-fluid">
        <form method="post">
            <h1 class="display-6">Kahvenizi Oluşturun</h1>
            <hr>
            <br>    
            <div class="maker">
            <input htmlspecialchars required type="text" name="name" class="form-control" placeholder="Adınız" aria-label="Username" aria-describedby="basic-addon1"><br>
                <select required name="value1" onchange='getir();  getir4();' onclick='getir2()' id="secenek1" class="form-select" aria-label="Default select example">
                    <option  disabled selected>İçecek Türü</option>
                   <?php while($row1 = mysqli_fetch_row($exec1)){ ?>
                    <option value="<?php echo $row1[1]; ?>"> <?php echo $row1[1]; ?> </option>
                    <?php }  ?>
                  </select>
                  <br>
                  <select required name="icecek_adı" id="secenek7"  class="form-select" aria-label="Default select example">
                    <option disabled selected>İçecek Adı</option>
                   <?php while($row7 = mysqli_fetch_row($exec7)){ ?>
                    <option value="<?php echo $row7[1]; ?>"> <?php echo $row7[1]; ?> </option>
                    <?php } ?>
                  </select>
                  <br>
                  <select name="espresso_secimi" id="secenek2" style="display:none;" class="form-select" aria-label="Default select example">
                    <option disabled selected>Espresso Seçimi</option>
                   <?php while($row6 = mysqli_fetch_row($exec6)){ ?>
                    <option value="<?php echo $row6[1]; ?>"> <?php echo $row6[1]; ?> </option>
                    <?php } ?>
                  </select>
                  
         

                    <select id="secenek7" style="display:none;" class="form-select" aria-label="Default select example">
                    <option disabled selected>İçecek Adı</option>
                   <?php while($row7 = mysqli_fetch_row($exec7)){ ?>
                    <option value="<?php echo $row7[1]; ?>"> <?php echo $row7[1]; ?> </option>
                    <?php } ?>
                  </select>
                  <br>

                  <select required name="boy_secimi" class="form-select" aria-label="Default select example">
                    <option disabled selected>Boy Seçimi</option>
                   <?php while($row2 = mysqli_fetch_row($exec2)){ ?>
                    <option value="<?php echo $row2[1]; ?>"> <?php echo $row2[1]; ?> </option>
                    <?php } ?>
                  </select>

                  <br>

                  <div style="display:none;" id="secenek3">
                  <li  class="form-select">
                  <p class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Extra Espresso Seçimi</p>
                  <ul  class="dropdown-menu">
                    <li class="list-group-item"><input name="extra_espresso" class="form-check-input " value="Espresso Shot"  type="checkbox"> Espresso Shot  </input></li>
                    <li class="list-group-item"><input  name="extra_espresso" class="form-check-input" value="DoubleShot"  type="checkbox"> DoubleShot  </input></li>     
                  </ul>
                  </li>
                  </div>

                  <br>

                  <div id="secenek4">
                  <li class="form-select">
                  <p class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sos/Şurup Seçimi</p>
                    <ul class="dropdown-menu">
                    <?php while($row3 = mysqli_fetch_row($exec3)){ ?> 
                      <li class="list-group-item"><input name="sos_secimi" class="form-check-input" value="<?php echo  $row3[1]; ?>"  type="checkbox"  id="flexCheckDefault"> <?php echo $row3[1]; ?> </input> </li>
                      <?php } ?>
                      </ul>
                  </li>
                  </div>

                  <br>

                  <select name="süt" id="secenek5" class="form-select" aria-label="Default select example">
                    <option disabled selected>Süt/Süt İçermeyen Alternatifler</option>
                   <?php while($row4 = mysqli_fetch_row($exec4)){ ?>
                    <option value="<?php echo $row4[1]; ?>"> <?php echo $row4[1]; ?> </option>
                    <?php } ?>
                   </select>
                  <br>
                  
                  <select name="seker" id="secenek6" class="form-select" aria-label="Default select example">
                    <option disabled selected>Şeker/ Tatlandırıcı</option>
                   <?php while($row5 = mysqli_fetch_row($exec5)){ ?>
                    <option value="<?php echo $row5[1]; ?>"> <?php echo $row5[1]; ?> </option>
                    <?php } ?>
                   </select>
                  
                  <br>

                 
                </form>
                
                  <div class="d-grid gap-2 d-md-block">
                    <button type="submit" onclick="scrollWin()" name="gonder" class="btn btn-outline-success">Kahveni Oluştur</button>
                    <a class="btn btn-primary" href="create_coffee.php" role="button">Yeni Bir Kahve Oluşturun</a>
                  </div>
                  </div>
                  <div class="yazı">
                      <hr>
                    <p class="lead">
                        Eğer daha önce Starbucks'a gitmediysen ve nasıl sipariş vereceğin ile ilgili bir fikrin yoksa ve sipariş kuyruğunda renkli dünyandaki çılgın
                        baristayı konuşturacak kadar zamanın olmadıysa doğru yerdesin ! Burada dilediğin kahve kombinasyonunu oluşturabilirsin. <br><br> Eğer kahveler hakkında
                        pek bir fikrin yoksa <a href="learn.php" class="link-info">buraya</a> tıklayarak çeşitli kahveler hakkında bilgi edinebilirsin. Kahve oluşturucu İle
                        dilediğin kahveyi oluşturabilir ve bunu siparişlerinde kullanabilirsin.
                        </p>
                        <hr>
                    </div>  
                     
            </div>       
        </div> 
    </div>
    <br><br><br><br>
    <div class="container">
        <br>
        <?php
         error_reporting(0);
         if(isset($_POST['gonder'])){
          echo '<h1 class="display-6"> İşte Mükemmel Seçiminiz </h1>
        
        <br><br><br>
        <div class="container">
            <p class="lead">
             
             
               <span style="color:#009373 ;">'.$_POST['name']." , " .$_POST['icecek_adı']." , ". $_POST['espresso_secimi']. " , " . $_POST['boy_secimi']. " , " .$_POST['extra_espresso']. " , " . $_POST['sos_secimi']. " , " . $_POST['süt']. " , " . $_POST['seker'].'</span>'.
            
            
          '</p>
          <hr>';
        }?>
        </div>  
                 
    </div>
    <br><br><br><br><br><br>
    <?php
    include_once(DATA."footer.php");
    ?>

</body>
</html>
