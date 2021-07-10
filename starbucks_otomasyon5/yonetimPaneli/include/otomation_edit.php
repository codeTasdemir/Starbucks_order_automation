<div class="content-wrapper" style="min-height: 1342.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Otomasyon Verileri Düzenleme</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Otomasyon Verileri Düzenleme</li>
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
                <h3 class="card-title">Otomasyon Kısmı - Veri Ekleme  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=SITE?>?page=otomation_edit" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kahve Adı</label>
                    <input type="text" name="kahve_adı" class="form-control" id="exampleInputEmail1" placeholder="Kahve Adını Giriniz">
                </div>
                <div class="card-footer">
                  <button type="submit" name="kahve_adı_ekle" class="btn btn-primary">Ekle</button>
                </div><br><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Boy Adı</label>
                    <input type="text" name="boy_adı" class="form-control" id="exampleInputEmail1" placeholder="Boy Adını Giriniz">
                </div>
                <div class="card-footer">
                  <button type="submit" name="boy_adı_ekle" class="btn btn-primary">Ekle</button>
                </div><br><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Şurup/Sos Adı</label>
                    <input type="text" name="sos_adı" class="form-control" id="exampleInputEmail1" placeholder="Şurup/Sos Adını Giriniz">
                </div>
                <div class="card-footer">
                  <button type="submit" name="sos_adı_ekle" class="btn btn-primary">Ekle</button>
                </div><br><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Süt vs Adı</label>
                    <input type="text" name="süt_adı" class="form-control" id="exampleInputEmail1" placeholder="Süt vs Adını Giriniz">
                </div>
                <div class="card-footer">
                  <button type="submit" name="süt_adı_ekle"  class="btn btn-primary">Ekle</button>
                </div><br><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Şeker/Tatlandırıcı Adı</label>
                    <input type="text" name="seker_adı" class="form-control" id="exampleInputEmail1" placeholder="Şeker/Tatlandırıcı Adını Giriniz">
                </div>
                <div class="card-footer">
                  <button type="submit" name="seker_adı_ekle" class="btn btn-primary">Ekle</button>
                </div><br><hr>
              </div>
             </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <form  action="<?=SITE?>?page=otomation_edit" method="post">
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Otomasyon Kısmı - Veri Silme</h3>
              </div>
              <div class="card-body">
              <div class="form-group">
                        <label>Kahve Adı</label>
                        <select name="kahve_adı_sil" class="form-control">
                        <?php
                         $querySelect1 =mysqli_query($con,"Select ID,coffee_Name from coffee_name");

                        while($rowSelect1 =mysqli_fetch_row($querySelect1)) {?>
                        <option value="<?php echo $rowSelect1[0]; ?>"><?php echo $rowSelect1[1]; ?></option>
                        <?php }?>
                        </select>
                      </div>
                      <div class="card-footer">
                  <button name="kahve_adı_sil_button" type="submit" class="btn btn-primary">Sil</button>
                </div>
              </div>
              <div class="card-body">
              <div class="form-group">
                        <label>Boy Adı</label>
                        <select name="boy_sil" class="form-control">
                        <?php
                         $querySelect2 =mysqli_query($con,"Select ID,size_name from size_name");

                        while($rowSelect2 =mysqli_fetch_row($querySelect2)) {?>
                        <option value="<?php echo $rowSelect2[0]; ?>"><?php echo $rowSelect2[1]; ?></option>
                        <?php }?>
                        </select>
                      </div>
                      <div class="card-footer">
                  <button name="boy_adı_sil_button" type="submit" class="btn btn-primary">Sil</button>
                </div>
              </div>
              <div class="card-body">
              <div class="form-group">
                        <label>Şurup/Sos Adı</label>
                        <select name="surup_sil" class="form-control">
                        <?php
                         $querySelect3 =mysqli_query($con,"Select ID,sauce_name from sauce_name");

                        while($rowSelect3 =mysqli_fetch_row($querySelect3)) {?>
                        <option value="<?php echo $rowSelect3[0]; ?>"><?php echo $rowSelect3[1]; ?></option>
                        <?php }?>
                        </select>
                      </div>
                      <div class="card-footer">
                  <button name="surup_adı_sil_button" type="submit" class="btn btn-primary">Sil</button>
                </div><hr>
              </div>
              <div class="card-body">
              <div class="form-group">
                        <label>Süt Adı</label>
                        <select name="süt_sil" class="form-control">
                        <?php
                         $querySelect4 =mysqli_query($con,"Select ID,milk_name from milk_name");

                        while($rowSelect4 =mysqli_fetch_row($querySelect4)) {?>
                        <option value="<?php echo $rowSelect4[0]; ?>"><?php echo $rowSelect4[1]; ?></option>
                        <?php }?>
                        </select>
                      </div>
                      <div class="card-footer">
                  <button name="süt_adı_sil_button" type="submit" class="btn btn-primary">Sil</button>
                </div><hr>
              </div>
              <div class="card-body">
              <div class="form-group">
                        <label>Şeker/Tatlandırıcı Adı</label>
                        <select name="seker_sil" class="form-control">
                        <?php
                         $querySelect5 =mysqli_query($con,"Select ID,sugar_name from sugar_name");

                        while($rowSelect5 =mysqli_fetch_row($querySelect5)) {?>
                        <option value="<?php echo $rowSelect5[0]; ?>"><?php echo $rowSelect5[1]; ?></option>
                        <?php }?>
                        </select>
                      </div>
                      <div class="card-footer">
                  <button name="seker_adı_sil_button" type="submit" class="btn btn-primary">Sil</button>
                </div><hr>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
             </div>
             <?php 
            error_reporting(0);
            /* Veri değişkenleri */
            $kahve_adı =  $_REQUEST['kahve_adı'];
            $boy_adı = $_REQUEST['boy_adı'];
            $sos_adı = $_REQUEST['sos_adı'];
            $süt_adı = $_REQUEST['süt_adı'];
            $seker_adı = $_REQUEST['seker_adı'];

            #ikinci form değişkenleri
            $kahve_adı_sil = $_REQUEST['kahve_adı_sil'];
            $boy_adı_sil = $_REQUEST['boy_sil'];
            $surup_adı_sil = $_REQUEST['surup_sil'];
            $süt_adı_sil = $_REQUEST['süt_sil'];
            $seker_adı_sil = $_REQUEST['seker_sil'];

            # İnput alanlarının veri tabanı işlemleri

            if(isset($_POST['kahve_adı_ekle']) && $kahve_adı != null)
            {
              $query1="INSERT INTO coffee_name(coffee_Name) VALUES ('$kahve_adı')";
              $gonder1= mysqli_query($con,$query1);
              echo '<script> alert("Bilgi Eklenmiştir"); </script>';
              header("Refresh:1");
              
            }
            else if(isset($_POST['boy_adı_ekle']) && $boy_adı != null )
            {
              $query2="INSERT INTO size_name(size_name) VALUES ('$boy_adı')";
              $gonder2= mysqli_query($con,$query2);
              echo '<script> alert("Bilgi Eklenmiştir"); </script>';
              header("Refresh:1");
            }
            else if(isset($_POST['sos_adı_ekle']) && $sos_adı != null)
            {
              $query3="INSERT INTO sauce_name(sauce_name) VALUES ('$sos_adı')";
              $gonder3= mysqli_query($con,$query3);
              echo '<script> alert("Bilgi Eklenmiştir"); </script>';
              header("Refresh:1");
            }
            else if(isset($_POST['süt_adı_ekle']) && $süt_adı != null)
            {
              $query4="INSERT INTO milk_name(milk_name) VALUES ('$süt_adı')";
              $gonder4= mysqli_query($con,$query4);
              echo '<script> alert("Bilgi Eklenmiştir"); </script>';
              header("Refresh:1");
            }
            else if(isset($_POST['seker_adı_ekle']) && $seker_adı != null)
            {
              $query5="INSERT INTO sugar_name(sugar_name) VALUES ('$seker_adı')";
              $gonder5= mysqli_query($con,$query5);
              echo '<script> alert("Bilgi Eklenmiştir"); </script>';
              header("Refresh:1");
            }
           
            else if(isset($_POST['kahve_adı_sil_button']) && $kahve_adı_sil != null)
            {
              $delQuery1 = mysqli_query($con,"Delete from coffee_name  where ID ='$kahve_adı_sil'");
              echo "<script> alert('Kayıt Silinmiştir.');</script>";
              header("Refresh:1");
            }

            else if(isset($_POST['boy_adı_sil_button']) && $boy_adı_sil != null)
            {
              $delQuery2 = mysqli_query($con,"Delete from size_name  where ID ='$boy_adı_sil'");
              echo "<script> alert('Kayıt Silinmiştir.');</script>";
              header("Refresh:1");
            }
            
            else if(isset($_POST['surup_adı_sil_button']) && $surup_adı_sil != null)
            {
              $delQuery3 = mysqli_query($con,"Delete from sauce_name  where ID ='$surup_adı_sil'");
              echo "<script> alert('Kayıt Silinmiştir.');</script>";
              header("Refresh:1");
            }

            else if(isset($_POST['süt_adı_sil_button']) && $süt_adı_sil != null)
            {
              $delQuery4 = mysqli_query($con,"Delete from milk_name  where ID ='$süt_adı_sil'");
              echo "<script> alert('Kayıt Silinmiştir.');</script>";
              header("Refresh:1");
            }

            else if(isset($_POST['seker_adı_sil_button']) && $seker_adı_sil != null)
            {
              $delQuery5 = mysqli_query($con,"Delete from sugar_name  where ID ='$seker_adı_sil'");
              echo "<script> alert('Kayıt Silinmiştir.');</script>";
              header("Refresh:1");
            }
            
            else
            {
            echo '<script> alert("İşlem gerçekleştirilemedi !!! "); </script>';;

            }
           ?>

          

                  </form>
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