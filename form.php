<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!--font awesome-->
    <link rel="stylesheet" href="css/all.css" />
    <script src="js/all.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="img/logodk.png" />
    <title>CV. DEAS KARYA</title>
    <style>
      .form-row {
        margin-right: 0px;
        margin-left: 0px;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <?php include "menu.php"; ?>
        </div>
      </div>
    </nav>
    <!--akhir nav-->
    <div style="padding-top: 14px"></div>
    <form class="container" method="post" action="config/simpan.php">
      <input type="hidden" name="aksi_volunteer" value="aksi_volunteer">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="validationServer01">Nama Depan</label>
          <input type="text" class="form-control" name="nama_depan" id="validationServer01" placeholder="Isi Nama Depan" required />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="validationServer02">Nama Belakang</label>
          <input type="text" class="form-control" name="nama_belakang" id="validationServer02" placeholder="Isi Nama Belakang">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="validationServer02" required />Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option selected>Pilih</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="validationServer03">No Telepon</label>
          <input type="number" class="form-control" name="telp" id="validationServer03" placeholder="No Telepon" value="Isi No Telepon" required />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputAddress">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" name="alamat" placeholder="Jalan Padalarang 48..." />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputAddress">Skill</label>
          <div class="custom-control custom-checkbox">
            <input class="form-check-input" name="skill[]" type="checkbox" value="Managemen">
            <label class="form-check-label" for="invalidCheck2"> Management </label><br />

            <input class="form-check-input" name="skill[]" type="checkbox" value="Koordinator">
            <label class="form-check-label" for="invalidCheck2"> Koordinator </label><br />

            <input class="form-check-input" name="skill[]"type="checkbox" value="Administrasi">
            <label class="form-check-label" for="invalidCheck2"> Administrasi </label>

            <input class="form-control" type="text" name="skill[]" placeholder="Lainnya" style="margin-left: -21px; margin-top: 8px" >
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <button type="reset" class="btn btn-primary">Reset</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </form>

    <footer>
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"></section>

      <?php include "footer.php"; ?>

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgb(239, 255, 255)">All Right Reserved by CV Deas Karya Copyright 2022</div>
      <!-- Copyright -->
    </footer>
  </body>
</html>
