<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WebAnge</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->1177050016
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Admin 1</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="halaman_updatemahasiswa.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li class="active"><a href="index.php"  style="font-weight: bold; border-left: 20px solid #cabd24;"><i class="fa fa-user" ></i> Update data</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mahasiswa</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update</h2>
                    <?php 
                    include "koneksi.php";
                    $idx=$_GET['id'];
                    $data_lama=mysqli_query($konek,"select * from mahasiswa where id_mahasiswa='$idx' ");
                    $row=mysqli_fetch_array($data_lama);
                    ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="proses_updatemahasiswa.php" method="POST" class="form-horizontal form-label-left" novalidate>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12" style="display: none;">
                          <input type="text" id="number" name="id" required="required" class="form-control"placeholder="nim" value="<?php echo $row['id_mahasiswa']; ?>" >
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabaru">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="namabaru" placeholder="semua nama, misal: Teguh Pribadi" required="required" type="text" value="<?php echo $row['nama']; ?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="passbaru" class="control-label col-md-3">Judul Proposal*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="text" placeholder="Judul Proposal" name="passbaru"  class="form-control col-md-7 col-xs-12" required="required"value="<?php echo $row['judul']; ?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="statebaru" class="control-label col-md-3">Angkatan*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="heard" type="text" placeholder="Angkatan" name="statebaru"  class="form-control col-md-7 col-xs-12" required="required"
                          value="<?php echo $row['angkatan']; ?>" >
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fakultasbaru">Fakultas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fakultas" class="form-control col-md-7 col-xs-12"  name="fakultasbaru" placeholder="fakultas" required="required" type="text" value="<?php echo $row['fakultas']; ?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jurusanbaru">Jurusan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="jurusan" class="form-control col-md-7 col-xs-12"  name="jurusanbaru" placeholder="jurusan" required="required" type="text" value="<?php echo $row['jurusan']; ?>" >
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-white">Batal</button>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </div>

                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            copyright by.angelyna</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>
    <!-- jquery.inputmask -->
    <script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>