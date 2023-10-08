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
    $query      = "SELECT * FROM tbl_pengaturan WHERE id_info='1'"; 
    $sql        = mysqli_query($connection, $query); 
    $data       = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Katalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>

<body>

    <div class="container">
        <?php include "navbar.php"; ?>
        <br>
        <!-- Content here -->
        <form action="config/simpan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="aksi_katalog" name="aksi_katalog">
        <div class="mb-3">
            <label class="form-label">Nama Katalog</label>
            <input type="text" class="form-control" name="judul" id="validationServer01" placeholder="Isi Nama Katalog" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" id="editor1" name="isi" id="validationServer01" placeholder="Isi Keterangan Katalog" required /></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail[]">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary" style="width:100%">
        </div>
        </form>
</body>
<?php include "footer.php"; ?>
<script>
    var allowedContent = true;
    CKEDITOR.replace('editor1', {
      allowedContent,
      height: 300,
      filebrowserBrowseUrl: 'assets/vendors/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: 'assets/vendors/ckfinder/ckfinder.html?type=Images',
      filebrowserUploadUrl: 'assets/vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: 'assets/vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
  </script>
</html>
