<?php
      require_once '../core/init.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php require_once '../layout-users/sidebar-nav.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Users Website SMKN 1 Rambuatan</h1>


          <!-- <h2 class="sub-header">* Halaman Depan</h2> -->
          <div class="jumbotron">
            <h1>All Of About Users</h1>
            <p class="lead">Informasi Seluruh Tenaga Pendidik dan Siswa SMKN 1 Rambutan.</p>
            <p class="btn btn-lg btn-success"><?php echo date('D-M-Y'); ?></p>
          </div>
          <!-- mulai slide -->
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

          <?php
          $result = tampil_all('kelas');
          while ($data = mysqli_fetch_assoc($result)) {
           ?>
           <h1 class="page-header">Siswa <?= $data['kelas']?></h1>
             <?php
            //  $jurusan = tampil('siswa')
             $query = tampil('siswa','kelas',$data['kelas']);
             while ($hasil = mysqli_fetch_assoc($query)) :
              ?>
              <div class="row konten">
                <div class="col-lg-3">
                  <img class="img-circle" src="../../assets/img/guru/<?= $hasil['foto']?>" alt="Generic placeholder image" width="140" height="140">
                  <h2><?= $hasil['nama']?></h2>
                  <p>Jurusan : <?= $hasil['jurusan']?> <br>
                     Kelas : <?= $hasil['kelas']?> <br>
                     Agama : <?= $hasil['agama']?> <br>
                     Prestasi : <?= $hasil['prestasi']?> <br>
                  </p>
                  <p><a class="btn btn-default" href="#" role="button">Hapus</a>
                     <a class="btn btn-default" href="#" role="button">Edit</a></p>
                </div><!-- /.col-lg-3 -->
                <?php endwhile; ?>

              </div>
              <!-- end row -->
          <?php } ?>
        <!-- endwhile1 -->

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
