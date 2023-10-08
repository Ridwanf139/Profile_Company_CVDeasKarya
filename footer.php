<?php
  include "admin/config/koneksi.php";
  $query       = "SELECT * FROM tbl_pengaturan WHERE id_info='1'"; 
  $sql         = mysqli_query($connection, $query); 
  $data  = mysqli_fetch_array($sql);
?>
<section class="footer">
  <div class="container text-center text-md-start mt-5">

    <div class="row mt-3">
      <p>
          <img src="img/logodk.png" alt="CV.DEAS" style="width: 80px" />
      </p>
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="text-align:justify">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4">
          <p>CV Deas Karya</p>
        </h6>
        <p>
          <?php echo $data['isi']; ?>
        </p>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4">

        <h6 class="text-uppercase fw-bold mb-4">
          Alamat
        </h6>
        <p>
        <?php echo $data['alamat']; ?>
        </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="text-align:left">

        <h6 class="text-uppercase fw-bold mb-4">
          Contact US
        </h6>
        <p><i class="fas fa-home me-3"></i> Indonesia, Jawa Barat, Bandung</p>
        <p>
          <i class="fas fa-envelope me-3"></i>
          <?php echo $data['email']; ?>
        </p>
        <p><i class="fas fa-phone me-3"></i> <?php echo $data['kontak']; ?></p>
      </div>

    </div>

  </div>
</section>