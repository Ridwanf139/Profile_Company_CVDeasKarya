<?php
error_reporting(E_ALL ^ (E_ALL));
session_start();
//
if (empty($_SESSION['username'])) {
    header("location:../login.php"); 
    exit();
}
?>
<?php
    include "config/koneksi.php";
    $id_admin    = mysqli_real_escape_string($connection,$_GET['id_admin']); 
    $query      = "SELECT * FROM tbl_admin WHERE id_admin='".$id_admin."'"; 
    $sql        = mysqli_query($connection, $query); 
    $data       = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
        content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords"
        content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Edit Admin</title>
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
                    <h5 class="breadcrumbs-title">Edit Admin</h5>
                    <form action="config/update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="aksi_admin" name="aksi_admin">
                    <input type="hidden" value="<?php echo $data['id_admin']; ?>" name="id_admin">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password (Baru)</label>
                        <input type="text" class="form-control" name="password" required />
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Simpan" class="btn btn-primary" style="width:100%">
                    </div>
                    </form>
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