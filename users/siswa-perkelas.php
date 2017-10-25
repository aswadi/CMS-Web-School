    <!-- load file init -->
    <?php require_once '../core/init-users.php'; ?>

    <div class="container  konten">
      <img class="hai" src="../assets/img/home/logo.png" alt="" />
      <h1>We Are Students of SMKN 1 Rambutan</h1>
      <hr class="featurette-divider">
      <!-- 4 columns of text below the carousel -->
      <div class="row">
        <?php
            // function tampil_2k($table, $field1, $k1, $field2, $k1)
            // "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
            $kelas = $_GET['kelas'];
            $result = tampil('siswa','kelas',$kelas);
            while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <div class="col-lg-3">
          <img class="img-circle" src="../assets/img/siswa/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?= $data['nama']?></h2>
          <p>Jurusan : <?= $data['jurusan']?> <br>
             Kelas : <?= $data['kelas']?> <br>
             Agama : <?= $data['agama']?><br>
             Prestasi Terbaik : <?= $data['prestasi']?> <br></p>
        </div><!-- /.col-lg-3 -->
        <?php endwhile; ?>
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
