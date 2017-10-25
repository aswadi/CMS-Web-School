    <!-- load file init -->
    <?php require_once '../core/init-users.php'; ?>

    <div class="container  konten">
      <img class="hai" src="../assets/img/home/logo.png" alt="" />
      <h1>We Are Teachers of SMKN1 Rambutan</h1>
      <hr class="featurette-divider">
      <!-- 4 columns of text below the carousel -->
      <div class="row">
        <?php
        $result = tampil_all('guru');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <div class="col-lg-3">
          <img class="img-circle" src="../assets/img/guru/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?= $data['nama']?></h2>
          <p>Jabatan : <?= $data['jabatan']?> <br>
             Gelar : <?= $data['gelar']?> <br>
             Email : <?= $data['email']?> <br>
             Alamat : <?= $data['alamat']?> <br>
             <!-- in static we need it -->
             <!-- Quote : "Pendidikan Yang Baik Adalah Pendidikan Budi Pekerti" -->
          </p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-3 -->
        <?php endwhile; ?>
      </div><!-- /.row -->

      <!-- end oejabat -->
      <hr class="featurette-divider">
      <!-- Three columns of Jurusan -->

      <!-- FOOTER -->
      <?php require_once '../layout-users/footer.php'; ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-1.12.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/jquery-1.12.3.min.js"><\/script>')</script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- <script src="assets/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
