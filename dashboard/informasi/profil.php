<?php
      require_once '../core/init.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php require_once '../layout-informasi/sidebar-nav.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Informasi SMKN 1 Rambuatan</h1>


          <!-- <h2 class="sub-header">* Halaman Depan</h2> -->
          <div class="jumbotron">
            <h1>All Of About Profile</h1>
            <p class="lead">Silahkan edit Informasi Profil SMKN 1 RAMBUTAN.</p>
            <p class="btn btn-lg btn-success"><?php echo date('D-M-Y'); ?></p>
          </div>
          <!-- mulai slide -->
          <h1 class="page-header">Identitas Sekolah</h1>
          <div class="jumbotron">

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-success">Identitas</th>
                    <th class="btn-success">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $tampil_profil = tampil_all('profil');
                  while ($tampil = mysqli_fetch_assoc($tampil_profil)):
                  ?>

                  <tr>
                    <td><?= $tampil['judul']?></td>
                    <td><?= $tampil['penjelasan']?></td>
                  </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
            <!-- end table -->
          </div>
          <!-- end jumbotron -->
          <!-- end jumbotrom -->
          <h1 class="page-header">Visi Misi</h1>
          <!-- mulai jumbotron -->
          <div class="jumbotron">
            <!-- mulai table -->
            <div class="table-responsive"><br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-success">Visi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $tampil_profil = tampil('visi_misi','kondisi','visi');
                  while ($tampil = mysqli_fetch_assoc($tampil_profil)):
                  ?>

                  <tr>
                    <td><h4>"<?= $tampil['isi']?>"</h4></td>
                  </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
            <!-- end table -->
            <!-- mulai table -->
            <div class="table-responsive"><br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-primary">Visi</th>
                  </tr>
                </thead>
                <tbody class="tisi">
                  <?php $tampil_profil = tampil('visi_misi','kondisi','misi');
                  while ($tampil = mysqli_fetch_assoc($tampil_profil)):
                  ?>

                  <tr>
                    <td><h4><?= $tampil['isi']?></h4></td>
                  </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
            <!-- end table -->
          </div>
          <!-- end jumbotrom -->

          <!-- mulai fasilitas -->
          <h1 class="page-header">OSIS</h1>
          <!-- mulai jumbotron -->
          <div class="jumbotron">
            <h3>OSIS SMKN 1 RAMBUTAN</h3>

        <p class="btn-warning">
          STRUKTUR KEPENGURUSAN OSIS SMKN 1 RAMBUTAN
        </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-success">Nama</th>
                    <th class="btn-success">Jabatan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $result = tampil_all('osis');
                  while ($data = mysqli_fetch_assoc($result)) :
                    ?>
                  <tr>
                    <td class="btn-primary"><?= $data['nama']?></td>
                    <td class="btn-warning"><?= $data['jabatan']?></td>
                  </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
            <!-- end table -->
          </div>
          <!-- end jumbotron -->
          <!-- mulai fasilitas -->
          <h1 class="page-header">PRAMUKA</h1>
          <div class="jumbotron">
            <h3>PRAMUKA SMKN 1 RAMBUTAN</h3>

        <br><br>
        <p class="btn-warning">
          STRUKTUR KEPENGURUSAN PRAMUKA SMKN 1 RAMBUTAN
        </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-success">Nama</th>
                    <th class="btn-success">Jabatan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $result = tampil_all('pramuka');
                  while ($data = mysqli_fetch_assoc($result)) :
                    ?>
                  <tr>
                    <td class="btn-primary"><?= $data['nama']?></td>
                    <td class="btn-warning"><?= $data['jabatan']?></td>
                  </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
            <!-- end table -->
          </div>
          <!-- end jumbotron -->
          <h1 class="page-header">Lainnya</h1>
          <div class="jumbotron">
            <!-- <h3>SMKN 1 RAMBUTAN</h3>
            <br> -->
            <?php $result = tampil_all('kegiatan');
            while ($data = mysqli_fetch_assoc($result)) :?>
            <h2 class="btn-primary"> <?= $data['judul']?></h2>

            <?= $data['kegiatan']?>
            <br><br>

            <?php endwhile; ?>

          </div>
          <!-- end jumbotron -->
          <h1 class="page-header">Sarana dan Prasarana</h1>
          <div class="jumbotron">

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-success">Nama</th>
                    <th class="btn-success">Ada</th>
                    <th class="btn-success">Tidak Ada</th>
                    <th class="btn-success">Jumlah</th>
                    <th class="btn-success">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $tampil_profil = tampil_all('sarana');
                  while ($tampil = mysqli_fetch_assoc($tampil_profil)):
                  ?>

                  <tr>
                    <td class="btn-primary"><?= $tampil['nama']?></td>
                    <td class="btn-success"><?= $tampil['ada']?></td>
                    <td class="btn-danger"><?= $tampil['tidak_ada']?></td>
                    <td class="btn-warning"><?= $tampil['jumlah']?></td>
                    <td class="btn-primary"><?= $tampil['keterangan']?></td>
                  </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
            <!-- end table -->
          </div>
          <!-- end jumbotron -->


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
