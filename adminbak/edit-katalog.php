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
    $id_katalog     = mysqli_real_escape_string($connection,$_GET['id_katalog']); 
    $query          = "SELECT * FROM tbl_katalog WHERE id_katalog='".$id_katalog."'"; 
    $sql            = mysqli_query($connection, $query); 
    $data           = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Katalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>

<body>

    <div class="container">
        <?php include "navbar.php"; ?>
        <br>
        <!-- Content here -->
        <form action="config/update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="aksi_katalog" name="aksi_katalog">
        <input type="hidden" value="<?php echo $data['id_katalog']; ?>" name="id_katalog">
        <div class="mb-3">
            <label class="form-label">Nama Katalog</label>
            <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>" id="validationServer01" placeholder="Isi Nama Katalaog" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="isi" id="editor1" rows="6" id="validationServer02" placeholder="Isi Keterangan Katalog" required /><?php echo $data['isi']; ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Thumbnail</label><br>
            <img src="../img/katalog/<?php echo $data['thumbnail']; ?>" style="width:100%;max-width:500px"><br><br>

            <input type="checkbox" name='ubah_thumbnail' value='true'>
            <label style=""> Ceklist Jika Ingin Mengganti Thumbnail
            <br>
            
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="thumbnail">
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