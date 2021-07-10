<div class="content-wrapper" style="min-height: 1342.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Öğretici İçerik DÜzenleme Alanı</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">İçerik Düzenleme</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kahveleri Öğren - İçerik Ekleme Alanı</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=SITE?>?page=learn_edit" method="post" enctype="multipart/form-data">
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kahve Adı</label>
                    <input required type="text" name="kahve_adı" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="col-sm-13">
                      <div class="form-group">
                        <label>Kahve Bilgi Yazısı</label>
                        <textarea required class="form-control" name="kahve_bilgi" rows="3" placeholder="Lütfen Bilgi yazısını yazınız..."></textarea>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Kahve Resmi</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="resim" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label"  for="exampleInputFile">Resim Dosyasını Seçiniz</label>
                    </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Kahve Türü</label>
                        <select required name="kahve_türü" class="form-control">
                        
                        <?php
                         $queryy =mysqli_query($con,"Select  * from  coffee_type");

                        while($roww=mysqli_fetch_row($queryy)) {?>
                        <option value="<?php echo $roww[0]; ?>"><?php echo $roww[1]; ?></option>
                        <?php }?>
     
                        </select>
                        </div>
                      <?php 
                         if(isset($_POST['ekle'])){
                          $coffe_name = $_POST['kahve_adı']; 
                          $coffee_type = $_POST['kahve_türü']; 
                          $coffee_desc = $_POST['kahve_bilgi'];
                          $image = $_FILES['resim']['tmp_name'];
                          $filename = $_FILES["resim"]["name"];
                          $tempname = $_FILES["resim"]["tmp_name"];    
                              $folder = "image/".$filename;
                          
                          $query1="INSERT INTO about_coffee(coffee_Name,coffee_description,image,type_id) VALUES ('$coffe_name','$coffee_desc','$filename','$coffee_type')";
                          $gonder = mysqli_query($con,$query1);
                          if (move_uploaded_file($tempname, $folder))  {
                           echo '<br>'. '<p style="color:green; font-size:18px; "> Kahve Bilgileri Eklenmiştir. </p>';
                           header("Refresh:6");
                        }else{  
                           echo '<br>' . '<p style="color:red; font-size:18px; "> Kahve Bilgileri Eklenemedi. </p>';
                           header("Refresh:6");
                      }
                        }
                         ?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="ekle" class="btn btn-primary"></input>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kahveleri Öğren - Eklenmiş Bilgi Silme Alanı </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=SITE?>?page=learn_edit" method="post">
                <div class="card-body">
                <div class="form-group">
                        <label>Silinecek Kahve Adı</label>
                        <select name="kahve_adı_sil" class="form-control">
                        
                        <?php
                         $query2 =mysqli_query($con,"Select coffee_Name from about_coffee");

                        while($row=mysqli_fetch_row($query2)) {?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                        <?php }?>
     
                        </select>
                      </div>
                      </div>
                      <div class="card-footer">
                  <button type="submit" name="delete_button" class="btn btn-primary">Sil</button>
                  <?php 
                    if(isset($_POST['delete_button']))
                    {
                      $silinecek_kahve = $_POST['kahve_adı_sil'];
                      $query3 =mysqli_query($con,"Delete from about_coffee where coffee_Name='$silinecek_kahve'");
                      echo '<br><br>' . '<p style="color:red; font-size:18px; "> '.$silinecek_kahve .' Kahvesinin bilgileri Sistemden Silinmiştir !!! </p>';
                      header("Refresh:6");
                    }

                  ?>
                </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
            <!-- /.card -->

                  <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>