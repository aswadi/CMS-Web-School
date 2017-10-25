    <!-- load file init -->
    <?php require_once '../core/init-users.php'; ?>

    <div class="container  konten">
      <h1>We Are Students of SMKN1 Rambutan</h1>
      <hr class="featurette-divider">
      <h1>Kelas X</h1>
      <hr class="featurette-divider">
      <!-- Three columns of Kelas -->
      <div class="row">
        <div class="col-lg-4">
          <?php $tampil_multimedia = tampil('jurusan', 'nama', 'Multimedia');
                $multimedia = mysqli_fetch_assoc($tampil_multimedia);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $multimedia['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Multimedia</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";

              $result = tampil('siswa','kelas','X Multimedia');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=X Multimedia" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php $tampil_tsm = tampil('jurusan', 'nama', 'Teknik Sepeda Motor');
                $tsm = mysqli_fetch_assoc($tampil_tsm);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $tsm['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Teknik Sepeda Motor</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','X Teknik Sepeda Motor');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=X Teknik Sepeda Motor" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php $tampil_TPHP = tampil('jurusan', 'nama', 'TPHP');
                $TPHP = mysqli_fetch_assoc($tampil_TPHP);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $TPHP['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>TPHP</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','X TPHP');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=X TPHP" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <hr class="featurette-divider">
      <!-- kelas XI -->
      <h1>Kelas XI</h1>
      <hr class="featurette-divider">
      <!-- Three columns of Kelas -->
      <div class="row">
        <div class="col-lg-4">
          <?php $tampil_multimedia = tampil('jurusan', 'nama', 'Multimedia');
                $multimedia = mysqli_fetch_assoc($tampil_multimedia);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $multimedia['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Multimedia</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','XI Multimedia');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=XI Multimedia" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php $tampil_tsm = tampil('jurusan', 'nama', 'Teknik Sepeda Motor');
                $tsm = mysqli_fetch_assoc($tampil_tsm);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $tsm['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Teknik Sepeda Motor</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','XI Teknik Sepeda Motor');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=XI Teknik Sepeda Motor" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php $tampil_TPHP = tampil('jurusan', 'nama', 'TPHP');
                $TPHP = mysqli_fetch_assoc($tampil_TPHP);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $TPHP['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>TPHP</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','XI TPHP');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=XI TPHP" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <!-- kelas XII -->
      <h1>Kelas XII</h1>
      <hr class="featurette-divider">
      <!-- Three columns of Kelas -->
      <div class="row">
        <div class="col-lg-4">
          <?php $tampil_multimedia = tampil('jurusan', 'nama', 'Multimedia');
                $multimedia = mysqli_fetch_assoc($tampil_multimedia);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $multimedia['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Multimedia</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','XII Multimedia');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=XII Multimedia" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php $tampil_tsm = tampil('jurusan', 'nama', 'Teknik Sepeda Motor');
                $tsm = mysqli_fetch_assoc($tampil_tsm);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $tsm['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Teknik Sepeda Motor</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','XII Teknik Sepeda Motor');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=XII Teknik Sepeda Motor" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php $tampil_TPHP = tampil('jurusan', 'nama', 'TPHP');
                $TPHP = mysqli_fetch_assoc($tampil_TPHP);
          ?>
          <img class="img-" src="../assets/img/jurusan/<?= $TPHP['foto'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2>TPHP</h2>
          <?php
              // function tampil_2k($table, $field1, $k1, $field2, $k1)
              // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
              $result = tampil('siswa','kelas','XII TPHP');
              while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['nama']?> <br></p>
        <?php endwhile; ?>
          <p><a class="btn btn-default" href="siswa-perkelas.php?kelas=XII TPHP" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

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
