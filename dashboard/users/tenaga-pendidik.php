<?php
      require_once '../core/init.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php require_once '../layout-users/sidebar-nav.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Informasi SMKN 1 Rambuatan</h1>

          <h1 class="page-header">Tenaga Pendidik</h1>
          <!-- mulai jumbotron -->
          <!-- 4 columns of text below the carousel -->
          <div class="row konten">
            <?php
            $result = tampil_all('guru');
            while ($data = mysqli_fetch_assoc($result)) :
             ?>
            <div class="col-lg-3">
              <img class="img-circle" src="../../assets/img/guru/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
              <h2><?= $data['nama']?></h2>
              <p>Jabatan : <?= $data['jabatan']?> <br>
                 Gelar : <?= $data['gelar']?> <br>
                 Email : <?= $data['email']?> <br>
                 Alamat : <?= $data['alamat']?> <br>
                 <!-- in static we need it -->
                 <!-- Quote : "Pendidikan Yang Baik Adalah Pendidikan Budi Pekerti" -->
              </p>
              <p><a class="btn btn-default" href="#" role="button">Hapus</a>
                 <a class="btn btn-default" href="#" role="button">Edit</a></p>
            </div><!-- /.col-lg-3 -->
            <?php endwhile; ?>
          </div><!-- /.row -->

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=".../../assets/js/jquery-1.12.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/jquery-1.12.3.min.js"><\/script>')</script>
    <script src="../../assets/js/bootstrap.min.js"></script>
  </body>
</html>
