 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Oluştur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ansayfa</a></li>
              <li class="breadcrumb-item active">Mail oluştur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="<?=SITE?>?page=compose" class="btn btn-primary btn-block mb-3">Yeni Mail oluştur</a>

            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="<?=SITE?>?page=mail" class="nav-link">
                      <i class="fas fa-inbox"></i> Gelen Kutusu
                      <span class="badge bg-primary float-right"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-envelope"></i> Gönderilen
                    </a>
                  </li>
                 
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Yeni İleti oluştur  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="<?=SITE?>?page=compose" method="post">
                <div class="form-group">
                  <input name="kime" class="form-control" placeholder="Kime:">
                </div>  
                <div class="form-group">
                  <input name="konu" class="form-control" placeholder="Konu:">
                </div>
                <div class="form-group">
                    <textarea name="icerik" id="compose-textarea" class="form-control" style="height: 300px">
                      
                      
                    </textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button name="gonder" type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Gönder</button>
                  <?php
                  error_reporting(0);
                $kime = $_REQUEST['kime'];
                $konu = $_REQUEST['konu'];
                $icerik = $_REQUEST['icerik'];
                

                //email gönderimi için gerekli olan dosyalar.
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
              
                require 'PHPMailer/src/Exception.php';
                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/SMTP.php';
                

                $mail = new PHPMailer(); //ilgili PHPMailer class'ımızdan bir nesne türetiyoruz.
                $mail->IsSMTP();
                $mail->SMTPAuth = true; 
                $mail->Host = 'smtp.gmail.com'; //SMTP için kullanılacak sunucu adresi
                $mail->Port = 587; //TLS protokolünün kullanacağı port numarası
                $mail->SMTPSecure = 'tls'; //kullanacağımız güvenlik protokolü SSL veya TLS olabilir.
                $mail->Username = 'mustafatsdis@gmail.com'; //Email gönderecek adres
                $mail->Password = 'Mustafa123.'; ////Email gönderecek adresin şifresi
                $mail->SetFrom($mail->Username, 'Mustafa Taşdemir');
                $mail->AddAddress($kime, 'Değerli Kullanıcı'); //Bu emaili gideceği e-posta adresi
                $mail->CharSet = 'UTF-8'; //Karakterlerin düzgün görünmesi için utf-8 ekliyoruz.
                $mail->Subject =$konu; //emailimizin konusu

                $icerik = "Gönderen: Starbucks Sipariş Otomasyonu Admin " .
                " Mesaj: ". ' ' . $icerik ;

                $mail->MsgHTML($icerik);
                

                //Artık emailimizi gönderiyoruz, yukarıdaki bilgilerde bir hata varsa bu satırda hata verecektir.
               if(isset($_POST['gonder'])){
                if($mail->Send()) {
                     //E-posta gönderildi
                     echo "Email başarıyla gönderildi";
                } else {
                    // Bir hata oluştu, hata mesajı yazdırıyoruz
                    echo  $mail->ErrorInfo;
                }
              }
              
                ?>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> İptal Et</button>
              </div>
              </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
