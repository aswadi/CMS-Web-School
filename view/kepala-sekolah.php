<!-- load file init -->
<?php require_once '../core/init-users.php'; ?>
<div class="container  konten">
  <h1><u>Kepala SMKN 1 Rambutan</u></h1>


  <div class="jumbotron kepsek">

    <div class="row">
      <?php
      $result = tampil('guru','jabatan','kepala sekolah');
      $data = mysqli_fetch_assoc($result);
       ?>
      <div class="col-lg-12">
        <img class="img-circle" src="../assets/img/guru/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
        <p>NIP : <?= $data['nip']?></p>
        <h2>Nama : <?= $data['nama']?></h2>
        <p>Gelar : <?= $data['gelar']?></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>
  <!-- end jumbotron -->

  <hr class="featurette-divider">

  <!-- FOOTER -->
  <?php require_once '../layout-users/footer.php'; ?>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery-1.12.3.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/jquery-1.12.3.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
