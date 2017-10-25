<?php
      require_once '../core/init.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php require_once '../layout-informasi/sidebar-nav.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Informasi SMKN 1 Rambuatan</h1>
          <h1 class="page-header">Sambutan <a class="btn btn-primary" href="#">Tambah Sambutan</a></h1>
          <!-- mulai jumbotron -->
          <?php

          if (!isset($_GET['sambutan'])) {
              $kondisi = 'kondisi';
              $_GET['sambutan'] = 'sambutan';
          }else {
              $kondisi = 'judul';
          }
          $sambutan = $_GET['sambutan'];
          $result = tampil('home',$kondisi,$sambutan);
          while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <div class="jumbotron">
            <!-- Mulai sambutan1 -->
            <!-- <h2>Sambutan</h2> -->
            <div class="foto">
              <img class="img-circle"  src="../../assets/img/home/<?= $data['foto']?>" alt="" />
            </div><br>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-primary">Sebagai</th>
                    <th class="btn-primary">Nama</th>
                    <th class="btn-primary">Sambutan</th>
                    <th class="btn-primary">Foto</th>
                    <th class="btn-primary">Action</th>
                    <th class="btn-primary">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td><?= $data['judul']?></td>
                    <td><?= $data['judul_dua']?></td>
                    <td><?= $data['penjelasan']?>
                    </td>
                    <td><?= $data['foto']?></td>
                    <td><a class="btn btn-primary" href="<?= $data['id']?>">Edit</a></td>
                    <td><a class="btn btn-primary" href="<?= $data['id']?>">Hapus</a></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- end sambutan1 -->
          </div>
        <?php endwhile; ?>
          <!-- end jumbotrom -->


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
