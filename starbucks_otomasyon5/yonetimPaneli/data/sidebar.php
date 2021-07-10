<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Paneli</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SS ADMİN</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Site Raporları
                <span class="badge badge-info right">3</span>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=SITE?>?page=statistics" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gösterim İstatistikleri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Düşünülecek</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Düşünülecek</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                İçerik Ayarları
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=SITE?>?page=learn_edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>İçerik Edit (Öğretici)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>?page=otomation_edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>İçerik Edit (Otomasyon)</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-header">Etkileşim</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailler
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=SITE?>?page=mail" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gelen Kutusu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>?page=compose" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail Gönder</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          <li class="nav-item">
          
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>