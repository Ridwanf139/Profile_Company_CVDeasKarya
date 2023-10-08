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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Testimoni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
</head>

<body>
    <div class="container">
        <?php include "navbar.php"; ?>
        <h1 class="display-6">Daftar Testimoni</h1><br>
        <table id="myTable" class="display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Testimoni</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config/koneksi.php"; 
                $no          = 0;
                $query       = "SELECT * FROM tbl_testimoni order by id_testi asc"; 
                $sql         = mysqli_query($connection, $query); 
                while($data  = mysqli_fetch_array($sql)){ 
                    $no++;
                //
                echo '
                <tr>
                    <td>'.$no.'</td>
                    <td>'.$data["nama"].'</td>
                    <td>'.$data["email"].'</td>
                    <td>'.$data["testi"].'</td>
                    <td>'.$data["status"].'</td>
                    <td>

                    <a href="config/update?id_testi='.$data["id_testi"].'&status=Diterima">
                    <button type="button" class="btn btn-success btn-sm">Terima</button></a>

                    <a href="config/update?id_testi='.$data["id_testi"].'&status=Ditolak">
                    <button type="button" class="btn btn-warning btn-sm">Tolak</button></a>

                    <a href="config/hapus?id_testi='.$data["id_testi"].'">
                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm(\'Anda yakin ingin menghapus testimoni '.$data["nama"].'?\');">Hapus</button></a>
                    </td>
                </tr>';
                }
                ?>
                
            </tbody>
        </table>

    </div>
</body>
<?php include "footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

</html>