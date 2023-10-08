<?php
    include "koneksi.php";
    error_reporting(E_ALL ^ (E_ALL));
    session_start();
        //
        $pilihan1  = mysqli_real_escape_string($connection,$_POST['aksi_jasa']);
        $pilihan2  = mysqli_real_escape_string($connection,$_POST['aksi_katalog']);
        $pilihan3  = mysqli_real_escape_string($connection,$_POST['aksi_admin']);

        if ($pilihan1 == 'aksi_jasa'){
                //
                $id         = 0;
                $judul      = htmlspecialchars($_POST['judul']);
                $isi        = mysqli_real_escape_string($connection,$_POST['isi']);
                $kategori   = htmlspecialchars($_POST['kategori']);
                //
                foreach ($_FILES["thumbnail"]["name"] as $key => $name){
                    //
                    $file   = $_FILES['thumbnail']['name'][$key];
                    //
                    if (($_FILES["thumbnail"]["type"][$key] == "image/png") 
                     or ($_FILES["thumbnail"]["type"][$key] == "image/jpeg")){
                       //
                       move_uploaded_file($_FILES['thumbnail']['tmp_name'][$key], '../../img/jasa/' . $file);
                       //
                    }
                       $query  = "INSERT INTO tbl_jasa VALUES('".$id."','".$judul."', '".$isi."', '".$file."', '".$kategori."')";
                       $sql    = mysqli_query($connection, $query);
                       //
                       if ($sql){
                            header('location: ../daftar-jasa?status=berhasil');
                       }
                       else {
                            header('location: ../daftar-jasa?status=gagal');
                       }
                }
                //
        }
        if ($pilihan2 == 'aksi_katalog'){
            //
            $id         = 0;
            $judul      = htmlspecialchars($_POST['judul']);
            $isi        = mysqli_real_escape_string($connection,$_POST['isi']);
            //
            foreach ($_FILES["thumbnail"]["name"] as $key => $name){
                //
                $file   = $_FILES['thumbnail']['name'][$key];
                //
                if (($_FILES["thumbnail"]["type"][$key] == "image/png") 
                 or ($_FILES["thumbnail"]["type"][$key] == "image/jpeg")){
                   //
                   move_uploaded_file($_FILES['thumbnail']['tmp_name'][$key], '../../img/katalog/' . $file);
                   //
                }
                   $query  = "INSERT INTO tbl_katalog VALUES('".$id."','".$judul."', '".$isi."', '".$file."')";
                   $sql    = mysqli_query($connection, $query);
                   //
                   if ($sql){
                        header('location: ../daftar-katalog?status=berhasil');
                   }
                   else {
                        header('location: ../daftar-katalog?status=gagal');
                   }
            }
            //
    }
    if ($pilihan3 == 'aksi_admin'){
          //
          $id            = 0;
          $nama          = htmlspecialchars($_POST['nama']);
          $username      = htmlspecialchars($_POST['username']);
          $password      = sha1($_POST['password']);
          //         
          $query  = "INSERT INTO tbl_admin VALUES('".$id."','".$nama."', '".$username."', '".$password."')";
          $sql    = mysqli_query($connection, $query);
          //
          if ($sql){
                    header('location: ../daftar-admin?status=berhasil');
          }
          else {
                    header('location: ../daftar-admin?status=gagal');
          }
     }
?>