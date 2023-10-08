<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--font awesome-->
  <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@200;400;600&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/logodk.png">
  <title>CV. DEAS KARYA</title>
  <style>
  element.style {
  }
  .figure-img {
      height: 300px;
  }
  </style>
</head>

<body>
  <!--nav -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index">
        <img src="img/logodk.png" alt="CV.DEAS" style="width: 80px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php include "menu.php"; ?>
      </div>
    </div>
  </nav>
  <!--akhir nav-->
  <!--brand IT--><br><br>
  <selection class="TI">
  <div class="container">
    <div class="row pt-2 text-center">
        <div class="col-12">
            <h3>Deas our product</h3> 
      </div>

      <div class="row pt-5 ml-3 justify-content-center">
        <?php
        include "admin/config/koneksi.php";
        $query       = "SELECT * FROM tbl_katalog order by id_katalog asc"; 
        $sql         = mysqli_query($connection, $query); 
        while($data  = mysqli_fetch_array($sql)){ ?>
        
        <div class="col-4">
          <figure class="figure">
            <img src="img/katalog/<?php echo $data['thumbnail']; ?>" class="figure-img img-fluid">
            <figcaption class="figure-caption">
              <h5><?php echo $data['judul']; ?></h5>
              <a href="detail-content.php?id_katalog=<?php echo $data['id_katalog']; ?>" class="btn btn-info text-white">Details</a>
            </figcaption>
          </figure>
        </div>

        <?php } ?>
        
      </div>
    </div>
  </div>
        </div>
        </div>
  </selection>

<!--footer-->
<footer>
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
  </section>
  
  <?php include "footer.php"; ?>

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgb(239, 255, 255);">
    All Right Reserved by CV Deas Karya Copyright 2022
    </div>
  <!-- Copyright -->
</footer>
<!--akhir-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

