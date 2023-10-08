  <?php
        error_reporting(E_ALL ^ (E_ALL));
        session_start();
        include 'admin/config/koneksi.php';
                $username       = mysqli_real_escape_string($connection,$_POST['username']);
                $password  	= mysqli_real_escape_string($connection,$_POST['password']);
                $passwordhash 	= sha1($password);
                $query 		= mysqli_query($connection,"SELECT username, password FROM tbl_admin WHERE username='$username' AND password='$passwordhash'");
                $cek 		= mysqli_num_rows($query);
        if($cek==TRUE)
        {
                $_SESSION['username']=$username;
                header("location: admin/index.php");
                exit();
        }
        else
        {
                echo "<script>alert('Username/Password Anda Salah');
                location = 'login.php';</script>";
                exit();
        }
   ?>
