<?php
  include "koneksi.php";
  error_reporting(E_ALL ^ (E_ALL));
  session_start();
  
   $pilihan1  = $_GET['id_testi'];
   $pilihan2  = $_POST['aksi_jasa'];
   $pilihan3  = $_POST['aksi_katalog'];
   $pilihan4  = $_POST['aksi_pengaturan'];
   $pilihan5  = $_POST['aksi_admin'];


   if(!empty($pilihan1)){
      //
      $status        = $_GET['status'];
      // Insert
      $query         = "UPDATE tbl_testimoni SET status='".$status."' WHERE id_testi='".$pilihan1."'";
      $sql           = mysqli_query($connection, $query); 
      //

      if($sql){ 
               if ($status == 'Diterima'){

                  echo "<script>alert('Testimoni Diterima');
                  location = '../daftar-testimoni';</script>";
               }
               else {

                  echo "<script>alert('Testimoni Ditolak');
                  location = '../daftar-testimoni';</script>";
               }
               
      }
      else{
               echo "<script>alert('Terjadi Kesalahan, Mohon Ulang Kembali');
                           location = '../daftar-testimoni';</script>";
      }
   }
   if(!empty($pilihan5)){
      //
      $id_admin   = htmlspecialchars($_POST['id_admin']);
      $nama       = htmlspecialchars($_POST['nama']);
      $username   = htmlspecialchars($_POST['username']);
      $password   = sha1($_POST['password']);
      // Insert
      $query      = "UPDATE tbl_admin SET nama='".$nama."', username='".$username."', password='".$password."' WHERE id_admin='".$id_admin."'";
      $sql        = mysqli_query($connection, $query); 
      //
      if($sql){ 
               echo "<script>alert('Berhasil Menyimpan Perubahan');
                           location = '../daftar-admin';</script>";
      }
      else{
               echo "<script>alert('Terjadi Kesalahan, Mohon Ulang Kembali');
                           location = '../daftar-admin';</script>";
      }
   }
   if(!empty($pilihan4)){
      //
      $alamat  = htmlspecialchars($_POST['alamat']);
      $email   = htmlspecialchars($_POST['email']);
      $kontak  = htmlspecialchars($_POST['kontak']);
      $isi     = htmlspecialchars($_POST['isi']);
      //
      $query         = "UPDATE tbl_pengaturan SET alamat='".$alamat."',email='".$email."',kontak='".$kontak."',isi='".$isi."' WHERE id_info='1'";
      $sql           = mysqli_query($connection, $query); 
      //
      if($sql){ 
               echo "<script>alert('Berhasil Menyimpan Perubahan');
                           location = '../pengaturan';</script>";
      }
      else{
               echo "<script>alert('Terjadi Kesalahan, Mohon Ulang Kembali');
                           location = '../pengaturan';</script>";
      }
   }
   if($pilihan2=="aksi_jasa"){
   {  
     $id          = mysqli_real_escape_string($connection,$_POST['id_jasa']);
     $judul       = htmlspecialchars($_POST['judul']);
     $isi         = mysqli_real_escape_string($connection,$_POST['isi']);
     $kategori    = htmlspecialchars($_POST['kategori']);

   if(isset($_POST['ubah_thumbnail'])){ 
      echo $doc      = $_FILES['thumbnail']['name'];
      $tmp      = $_FILES['thumbnail']['tmp_name'];
      $docbaru  = date('dmYHis').$doc;
      $path     = "../../img/jasa/".$docbaru;

     if(move_uploaded_file($tmp, $path)){ 
        $query  = "SELECT * FROM tbl_jasa WHERE id_jasa='".$id."'";
        $sql    = mysqli_query($connection, $query);
        $data   = mysqli_fetch_array($sql);

        if(is_file("../../img/jasa/".$data['thumbnail'])) 
           unlink("../../img/jasa/".$data['thumbnail']); 
           $query  = "UPDATE tbl_jasa SET judul='".$judul."',isi='".$isi."',kategori='".$kategori."', thumbnail='".$docbaru."' WHERE id_jasa='".$id."'";
           $sql    = mysqli_query($connection, $query); 

         if ($sql){ 
            echo "<script>alert('Data Berhasil Diperbaharui');
                 location = '../daftar-jasa';</script>";
         }
         else {
             echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke sistem Code 1');
                 location = '../daftar-jasa';</script>";
         }
     } 
     else {
      echo "<script>alert('Maaf, Data Gagal Di Upload');
      location = '../daftar-jasa';</script>";
     }
 }
 else {
         $query  = "UPDATE tbl_jasa set judul='".$judul."',isi='".$isi."',kategori='".$kategori."' WHERE id_jasa='".$id."'";
         $sql    = mysqli_query($connection, $query); 

         if($sql){
            echo "<script>alert('Jasa Berhasil Diperbaharui');
            location = '../daftar-jasa';</script>";
            //echo $query;
         }
         else {
            echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke sistem Code 2');
            location = '../daftar-jasa';</script>";
         }
    } 
 }
}
if($pilihan3=="aksi_katalog"){
   {  
     $id          = mysqli_real_escape_string($connection,$_POST['id_katalog']);
     $judul       = htmlspecialchars($_POST['judul']);
     $isi         = mysqli_real_escape_string($connection,$_POST['isi']);
     $kategori    = htmlspecialchars($_POST['kategori']);

   if(isset($_POST['ubah_thumbnail'])){ 
      $doc      = $_FILES['thumbnail']['name'];
      $tmp      = $_FILES['thumbnail']['tmp_name'];
      $docbaru  = date('dmYHis').$doc;
      $path     = "../../img/katalog/".$docbaru;

     if(move_uploaded_file($tmp, $path)){ 
        $query  = "SELECT * FROM tbl_katalog WHERE id_katalog='".$id."'";
        $sql    = mysqli_query($connection, $query);
        $data   = mysqli_fetch_array($sql);

        if(is_file("../../img/katalog/".$data['thumbnail'])) 
           unlink("../../img/katalog/".$data['thumbnail']); 
           $query  = "UPDATE tbl_katalog SET judul='".$judul."',isi='".$isi."', thumbnail='".$docbaru."' WHERE id_katalog='".$id."'";
           $sql    = mysqli_query($connection, $query); 

         if ($sql){ 
            echo "<script>alert('Data Berhasil Diperbaharui');
                 location = '../daftar-katalog';</script>";
         }
         else {
             echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke sistem Code 1');
                 location = '../daftar-katalog';</script>";
         }
     } 
     else {
      echo "<script>alert('Maaf, Data Gagal Di Upload');
      location = '../daftar-katalog';</script>";
     }
 }
 else {
         $query  = "UPDATE tbl_katalog set judul='".$judul."',isi='".$isi."'WHERE id_katalog='".$id."'";
         $sql    = mysqli_query($connection, $query); 

         if($sql){
            echo "<script>alert('Katalog Berhasil Diperbaharui');
            location = '../daftar-katalog';</script>";
            //echo $query;
         }
         else {
            echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke sistem Code 2');
            location = '../daftar-katalog';</script>";
         }
    } 
 }
}
?>