<?php
   error_reporting(E_ALL ^ (E_ALL));
   session_start();
   include 'koneksi.php';
        $username 	  = mysqli_real_escape_string($connection,$_POST['username']);
        $password  	  = mysqli_real_escape_string($connection,$_POST['password']);
        $passwordhash     = sha1($password);
                
                $query    = mysqli_query($connection,"SELECT username, password FROM tbl_users WHERE 
                            username='$username' AND password='$passwordhash'");
                $cek 	  = mysqli_num_rows($query);

                if($cek==TRUE){
                         $_SESSION['username']=$username;
                         header("location: ../index");
                         exit();
                }
                else{
                         echo "<script>alert('Username/Password Anda Salah');
                               location = '../../login.php?error1';</script>";
                         exit();
                }
   ?>
