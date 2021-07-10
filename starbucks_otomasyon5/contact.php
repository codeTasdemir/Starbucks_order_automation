<?php
  session_start();
  ob_start();
  define("DATA","DataS/");
  require('connection.php');
  error_reporting(0);
?>
<!Doctype html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stil.css">
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="stil.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php
      include_once(DATA."navbar.php");
     ?>  
    <br><br><br>
    
    
    <div class="container">
    <h2 class="display-6"><span style="color:green;">İletişim</span></h2><hr>
        <div class="">
            <p class="lead">
                Bir önerim var veya şurası hiç hoşuma gitmedi dediğin şeyler varsa hiç çekinme ! İletişim kısmına öneri ve 
                şikayetlerini bize iletebilirsin. Burası senin isteklerinle daha iyi bir yer olacak sana güveniyoruz ...
                </p>
            <hr>
        </div>   
        <br><br>
    <div class="mb-3">
    <br>
  <form action="contact.php" method="post"> 

      <label for="exampleFormControlInput1" class="form-label" required>İsim Soyisim</label>
      <input htmlspecialchars name="name_surname" type="text" class="form-control" id="exampleFormControlInput1" required placeholder=""><br>
      <label for="exampleFormControlInput1" class="form-label">Email Adresiniz</label>
      <input htmlspecialchars name="visitor_email" type="email" class="form-control" id="exampleFormControlInput1" required placeholder="name@example.com">
        <br>
        
        <div class="form-check form-check-inline">
        <input  htmlspecialchars class="form-check-input" type="radio" name="choice" id="inlineRadio1" value="İstek">
        <label htmlspecialchars class="form-check-label" for="inlineRadio1">İstek</label>
      </div>
      <div class="form-check form-check-inline">
        <input htmlspecialchars class="form-check-input" type="radio" name="choice" id="inlineRadio2" value="Öneri">
        <label class="form-check-label" for="inlineRadio2">Öneri</label>
      </div>      
      
      <div class="form-check form-check-inline">
        <input htmlspecialchars class="form-check-input" type="radio" name="choice" id="inlineRadio3" value="Şikayet">
        <label class="form-check-label" for="inlineRadio2">Şikayet</label>
      </div>      
        
        
    <br>    
    <br>
      <label for="exampleFormControlTextarea1" class="form-label">Lütfen seçtiğiniz konudaki isteğinizi belirtiniz</label>
      <textarea htmlspecialchars name="subject_text" class="form-control" id="exampleFormControlTextarea1" required maxlength="500" rows="3"></textarea>
      <br>
      <button name="save" type="submit" class="btn btn-success">Mesajınızı Gönderin</button>
      <br><br>

      
      <?php 
    //şikayet öneri kısmındaki verileri alan veritabanına ekleyen kısım

    if(isset($_POST['save']) && $_POST['name_surname'] != null && $_POST['visitor_email'] != null && $_POST['choice'] != null && $_POST['subject_text'] != null)
    {
      $name_surname = $_POST['name_surname'];
      $visitor_email = $_POST['visitor_email'];
      $subject_choice = $_POST['choice'];
      $subject_text = $_POST['subject_text'];

      $query1 = "INSERT INTO messages(name_surname,email,subject,message) VALUES ('$name_surname', '$visitor_email','$subject_choice', '$subject_text' )";
      $send1 = mysqli_query($con,$query1);
      echo '<div class="alert alert-success" role="alert">
      Mesajınız iletilmiştir en kısa sürede dönüş yapıılcaktır, lütfen mail kutunuzu kontrol ediniz
    </div>';
    header("Refresh:5");
  
  }
  else if(empty($_POST['save']))
  {
    echo '<div class="alert alert-primary" role="alert"> Tüm alanları eksiksiz doldurunuz </div>';
  }
  else{
    echo '<div class="alert alert-danger" role="alert"> Mesajınız iletilemedi lütfen tekrar deneyiniz !! </div>';
  }
    

  ?>
  </form>
</div>
    </div>
    <br><br><br><br><br><br><br><br>
    </div>
    <?php
    include_once(DATA."footer.php");
    
  ?>

</body>
</html>