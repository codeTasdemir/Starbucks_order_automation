

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gelen Kutusu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Gelen Kutusu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="<?=SITE?>?page=mail" class="btn btn-primary btn-block mb-3">Gelen Kutusuna Dön</a>

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
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-envelope"></i>  Gönderilenler
                  </a>
                </li>
              </ul>
                <!-- /.float-right -->
              </div>
            </div>
          </div>

        <?php 
            // Mail bilgilerini idye göre veritabanından çekip burada okunabilecek.
            $mail_id = $_POST['gonder'];
            $query1 = "Select * from messages where ID=$mail_id";
            $data_execute = mysqli_query($con,$query1);
            $datas = mysqli_fetch_array($data_execute);
        ?>
        
          <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title"><?php echo 'Mail Okunuyor  --' . '  '. $datas[1]; ?>  </h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5> KONU : <?php echo $datas[3] ?> </h5> <br>
                <h6>Kimden :  <?php echo ' '. $datas[2] ?>  
                  <span class="mailbox-read-time float-right"> <?php echo $datas[5]; ?> </span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" onclick="window.print();" class="btn btn-default btn-sm" title="Print">
                  <i class="fas fa-print"></i>
                </button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Merhaba Admin,</p>

                <p> <?php echo ' '. $datas[4] ?> </p>

              
              </div>
              


              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
           
            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">
                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Geri</button>
                <button type="button" class="btn btn-default"><i class="fas fa-share"></i> İleri</button>
              </div>
              <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Sil</button>
              <button type="button" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Yazdır</button>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
         
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

