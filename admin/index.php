<?php
error_reporting(E_ALL ^ (E_ALL));
session_start();
//
if (empty($_SESSION['username'])) {
    header("location:../login.php"); 
    exit();
}
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Beranda</title>
    <!-- Favicons-->
    <link rel="icon" href="images/logo/iconsadmin.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css//materialize.css" type="text/css" rel="stylesheet">
    <link href="css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <?php include "header.php"; ?>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <?php include "menu.php"; ?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
              <div class="row mt-1">
                <?php
                    $sql        = "SELECT COUNT(*) FROM tbl_jasa"; 
                    $query      = mysqli_query($connection, $sql); 
                    $row        = mysqli_fetch_row($query);
                    mysqli_free_result($query); 
                ?>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">star</i>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $row[0]; ?></h5>
                        <p class="no-margin">Jumlah Jasa</p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    $sql        = "SELECT COUNT(*) FROM tbl_katalog"; 
                    $query      = mysqli_query($connection, $sql); 
                    $row        = mysqli_fetch_row($query);
                    mysqli_free_result($query); 
                ?>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">import_contacts</i>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $row[0]; ?></h5>
                        <p class="no-margin">Jumlah Katalog</p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    $sql        = "SELECT COUNT(*) FROM tbl_testimoni"; 
                    $query      = mysqli_query($connection, $sql); 
                    $row        = mysqli_fetch_row($query);
                    mysqli_free_result($query); 
                ?>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">insert_emoticon</i>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $row[0]; ?></h5>
                        <p class="no-margin">Jumlah Testimoni</p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    $sql        = "SELECT COUNT(*) FROM tbl_volunteer"; 
                    $query      = mysqli_query($connection, $sql); 
                    $row        = mysqli_fetch_row($query);
                    mysqli_free_result($query); 
                ?>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">directions_run</i>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $row[0]; ?></h5>
                        <p class="no-margin">Jumlah Volunteer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card stats end-->
            
            <!--card widgets start-->
            <div id="card-widgets">
              <div class="row">
                <div class="col s12 m4 l4">
                </div>
                <div class="col s12 m12 l4">
                </div>
                <div class="col s12 m4 l4">
                </div>
              </div>
            </div>
            <!--card widgets end-->
            
            <!--work collections start-->
            <!--work collections end-->
            
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
        </aside>
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <?php include "footer.php"; ?>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
  </body>
</html>