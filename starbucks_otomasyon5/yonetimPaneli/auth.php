<?php 
session_start();
require('connection.php');

if(isset($_POST['giris_bilgileri_gonder']))
{
    // Post ile gelen form verileri 
    $email = $_POST['admin_email'];
    $şifre = $_POST['pass'];
    $pass = md5($şifre);
    // Veritabanından çekilen admin girişi ile ilgili veriler

    $query = mysqli_query($con,"select * from admin");

    while($row =mysqli_fetch_row($query)){
    if ($email == $row[1] && $pass == $row[2]) {
        
        $_SESSION['email'] = $email;
        header("Location:index.php");
    }
    else{
        header("Location:admin_login.php");
        
    }
}
}

?>