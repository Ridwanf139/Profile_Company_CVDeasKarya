<?php
     include "../admin/config/koneksi.php";
     error_reporting(E_ALL ^ (E_ALL));
     session_start();

     $pilihan1  = mysqli_real_escape_string($connection,$_POST['aksi_testimoni']);
     $pilihan2  = mysqli_real_escape_string($connection,$_POST['aksi_volunteer']);
     $pilihan3  = mysqli_real_escape_string($connection,$_POST['aksi_admin']);
        //
     if ($pilihan1 == 'aksi_testimoni'){
          $id            = 0;
          $nama          = htmlspecialchars($_POST['nama']);
          $email         = htmlspecialchars($_POST['email']);
          $testimoni     = htmlspecialchars($_POST['testimoni']);
          $status        = "Belum Ada";
          //
          $query    = "INSERT INTO tbl_testimoni VALUES('".$id."','".$nama."', '".$email."', '".$testimoni."', '".$status."')";
          $sql      = mysqli_query($connection, $query);
          //
          if ($sql){
                    echo '<script>alert("Terimakasih, Testimoni Berhasil Dikirim");
                    window.location.href = "../testimoni?status=berhasil";</script>';
          }
          else{
                    echo '<script>alert("Terjadi Kesalahan");
                    window.location.href = "../testimoni?status=berhasil";</script>';
          }
     }
     if ($pilihan2 == 'aksi_volunteer'){
          $id            = 0;
          $nama_depan    = htmlspecialchars($_POST['nama_depan']);
          $nama_belakang = htmlspecialchars($_POST['nama_belakang']);
          $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
          $telp          = htmlspecialchars($_POST['telp']);
          $email         = htmlspecialchars($_POST['email']);
          $alamat        = htmlspecialchars($_POST['alamat']);
          //
          $skill         = implode(", ", $_POST['skill']);
          //
          $query    = "INSERT INTO tbl_volunteer VALUES('".$id."','".$nama_depan."', '".$nama_belakang."', 
                      '".$jenis_kelamin."', '".$telp."', '".$email."', '".$alamat."', '".$skill."')";
          $sql      = mysqli_query($connection, $query);
          //
          if ($sql){
                    echo '<script>alert("Terimakasih, Data Anda Berhasil Dikirim");
                    window.location.href = "../form?status=berhasil";</script>';
          }
          else{
                    echo '<script>alert("Terjadi Kesalahan");
                    window.location.href = "../form?status=berhasil";</script>';
          }
     }
     if ($pilihan3 == 'aksi_admin'){
          $id            = 0;
          $nama    = htmlspecialchars($_POST['nama']);
          $username = htmlspecialchars($_POST['username']);
          $password = htmlspecialchars($_POST['password']);
          //
          $query    = "INSERT INTO tbl_testimoni VALUES('".$id."','".$nama."', '".$username."', '".$password."')";
          $sql      = mysqli_query($connection, $query);
          //
          if ($sql){
                    echo '<script>alert("Terimakasih, Data Admin telah ditambahkan");
                    window.location.href = "../form?status=berhasil";</script>';
          }
          else{
                    echo '<script>alert("Terjadi Kesalahan");
                    window.location.href = "../form?status=berhasil";</script>';
          }
     }
?>