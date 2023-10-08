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
    $id_jasa    = mysqli_real_escape_string($connection,$_GET['id_jasa']); 
    $query      = "SELECT * FROM tbl_jasa WHERE id_jasa='".$id_jasa."'"; 
    $sql        = mysqli_query($connection, $query); 
    $data       = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Jasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php include "navbar.php"; ?>
        <br>
        <!-- Content here -->
        <form action="config/update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="aksi_jasa" name="aksi_jasa">
        <input type="hidden" value="<?php echo $data['id_jasa']; ?>" name="id_jasa">
        <div class="mb-3">
            <label class="form-label">Nama Jasa</label>
            <input type="text" class="form-control" name="judul" id="validationServer01" value="<?php echo $data['judul']; ?>" placeholder="Isi Nama Jasa" required/>
        </div>
        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="isi" id="validationServer02" rows="6" placeholder="Isi Keterangan Jasa" required/><?php echo $data['isi']; ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Thumbnail</label><br>
            <img src="../img/jasa/<?php echo $data['thumbnail']; ?>" style="width:100%;max-width:500px"><br><br>

            <input type="checkbox" name='ubah_thumbnail' value='true'>
            <label style=""> Ceklist Jika Ingin Mengganti Thumbnail
            <br>
            
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="thumbnail">
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori Jasa</label>
            <select class="form-control" name="kategori">
                <option><?php echo $data['kategori']; ?></option>
                <option>== Ganti Pilihan ==</option>
                <option>Bidang IT</option>
                <option>Bidang Hiburan</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary" style="width:100%">
        </div>
        </form>
</body>
<?php include "footer.php"; ?>

</html>