<?php
    
    $con = mysqli_connect("localhost","root","","coffee");
    $con->set_charset("utf8");
    // SQL bağlantımızın kontrolünü gerçekleştir 
    
    if ($con->connect_error) {
        die("Veritabanı bağlantısı başarışız olmuştur !! : " . $con->connect_error);
      } 
?>