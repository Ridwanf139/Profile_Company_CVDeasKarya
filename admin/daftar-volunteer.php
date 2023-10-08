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
    session_start();
    error_reporting(E_ALL ^ (E_ALL));
    $username    = $_SESSION['username'];
    $query       = "SELECT * FROM tbl_users WHERE username='$username'"; 
    $sql         = mysqli_query($connection, $query); 
    $data        = mysqli_fetch_array($sql);
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
  <title>Daftar Volunteer</title>
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
  <link href="vendors/prism/prism.css" type="text/css" rel="stylesheet">
  <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
  <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
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
      <section id="content" style="padding:20px">
      <h5 class="breadcrumbs-title">Daftar Volunteer</h5>
      <table id="myTable" class="display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Telp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Skill</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config/koneksi.php"; 
                $no          = 0;
                $query       = "SELECT * FROM tbl_volunteer order by id_volunteer asc"; 
                $sql         = mysqli_query($connection, $query); 
                while($data  = mysqli_fetch_array($sql)){ 
                $no++;
                //
                echo '
                <tr>
                    <td>'.$no.'</td>
                    <td>'.$data["nama_depan"].' '.$data["nama_belakang"].'</td>
                    <td>'.$data["jenis_kelamin"].'</td>
                    <td>'.$data["telp"].'</td>
                    <td>'.$data["email"].'</td>
                    <td>'.$data["alamat"].'</td>
                    <td>'.$data["skill"].'</td>
                    <td>

                    <a href="config/hapus?id_volunteer='.$data["id_volunteer"].'">
                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm(\'Anda yakin ingin menghapus '.$data["nama_depan"].'?\');">Hapus</button></a>
                    </td>
                </tr>';
                }
                ?>
                
            </tbody>
        </table>
      </section>
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
  <!--prism-->
  <script type="text/javascript" src="vendors/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.js"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="js/custom-script.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script>
      $(document).ready(function () {
          $('#myTable').DataTable();
      });
  </script>
</body>

</html>