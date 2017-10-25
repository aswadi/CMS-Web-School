    <!-- load file init -->
    <?php require_once '../core/init-users.php'; ?>

    <div class="container  konten">
      <h1>Kurikulum SMKN1 Rambutan</h1>
      <hr class="featurette-divider">
      <!-- Three columns of Kelas -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/home/pilot.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Multimedia</h2>
          <?php
          // function tampil($table, $field, $k)
          $result = tampil('kurikulum', 'jurusan', 'Multimedia');
          while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['mapel']. ' di Kelas ' . $data['kelas']?> <br></p>
        <?php endwhile; ?>
          <p>
          <a class="btn btn-default" href="#" role="button">Lulus</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/home/assistant.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Teknik Sepeda Motor</h2>
          <?php
          // function tampil($table, $field, $k)
          $result = tampil('kurikulum', 'jurusan', 'Teknik Sepeda Motor');
          while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['mapel']. ' di Kelas '. $data['kelas']?> <br></p>
        <?php endwhile; ?>
          <p>
          <a class="btn btn-default" href="#" role="button">Lulus</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/home/dj.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Pertanian</h2>
          <?php
          // function tampil($table, $field, $k)
          $result = tampil('kurikulum', 'jurusan', 'Pertanian');
          while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <p><?= $data['mapel']. ' di Kelas '. $data['kelas']?> <br></p>
        <?php endwhile; ?>
          <p>
          <a class="btn btn-default" href="#" role="button">Lulus</a></p>
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
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- <script src="assets/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
