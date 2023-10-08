<?php
error_reporting(E_ALL ^ (E_ALL));
session_start();
//
if (empty($_SESSION['username'])) {
    header("location:../login.php"); 
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        img {
            float: left;
            width: 100%;
            max-height: 600px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php include "navbar.php"; ?>


        <!-- Content here -->
        <img src="assets/img/admin.svg" class="img-fluid" alt="...">
    </div>
</body>
<?php include "footer.php"; ?>

</html>