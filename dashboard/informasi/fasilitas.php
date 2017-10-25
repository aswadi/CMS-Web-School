<?php
      require_once '../core/init.php';
?>

    <div class="container-fluid">
      <div class="row">
        <?php require_once '../layout-informasi/sidebar-nav.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Informasi SMKN 1 Rambuatan</h1>
          <!-- mulai fasilitas -->
          <h1 class="page-header">Fasilitas</h1>
          <!-- mulai jumbotron -->
          <?php

          if (!isset($_GET['id'])) {
            $result = tampil_like('home','kondisi','fasilitas');
          }else {
            $result = tampil('home','id',$_GET['id']);
          }

          while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <div class="jumbotron">
            <!-- Mulai fasilitas -->

            <div class="foto">
              <img class="img-circle"  src="../../assets/img/home/<?= $data['foto']?>" alt="" />
            </div><br>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="btn-success">Judul</th>
                    <th class="btn-success">Sub_Judul</th>
                    <th class="btn-success">Penjelasan</th>
                    <th class="btn-success">Foto</th>
                    <th class="btn-success">Edit</th>
                    <th class="btn-success">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td><?= $data['judul']?></td>
                    <td><?= $data['judul_dua']?></td>
                    <td><?= $data['penjelasan']?></td>
                    <td><?= $data['foto']?></td>
                    <td><?= $data['link']?></td>
                    <td>Edit</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- end fasilitas -->
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
