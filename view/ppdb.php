<!-- load file init -->
<?php require_once '../core/init-users.php'; ?>

<?php     $pesan = '';
          $pesan2 = '';
          if (isset($_POST['submit'])) {
          $nis = $_POST['nis'];
          cek_lulus($nis);
          if (mysqli_num_rows(cek_lulus($nis)) !=0) {
            $pesan = 'Selamat Anda LULUS !!!';
            $pesan2 = 'Harap Segera Melakukan Pendaftaran Ulang!!!';
          }else {
            $pesan = 'Maaf Anda tidak LULUS !!!';
          }
} ?>


<div class="container  konten">
  <h1><u>Data PPDB SMKN 1 Rambutan</u></h1>
  <div class="row">


  <div class="col-md-2 btn-warning">
    <h1 class="btn btn-success"><?php echo date('D-M-Y'); ?></h1>
        <h3>Pengunjung</h3>
      <script id="_wau019">var _wau = _wau || []; _wau.push(["classic", "wgitjjixdg1a", "019"]);
      (function() {var s=document.createElement("script"); s.async=true;
      s.src="//widgets.amung.us/classic.js";
      document.getElementsByTagName("head")[0].appendChild(s);
      })();</script>

  <h3><u>Pengumuman</u></h3>
  <p class="pengumuman">
    <?php
    $result = tampil_all_desc('pengumuman');
     $dat = mysqli_fetch_assoc($result);
     ?><?= $dat['pengumuman']?>
  </p>
  <!-- mulai menu -->
  <!-- tutupmenu -->

  </div>
  <div class="col-md-10">
  <div class="jumbotron">
    <p class="btn-warning">
      Silahkan Masukkan NIS Untuk Mengecek Kelulusan :
    </p>
    <form action="" method="post">
      <label for="nis">NIS :</label>
      <input type="text" name="nis" value="" placeholder="1232321">
      <input type="submit" name="submit" value="Cek">
    </form><br>
    <p class="btn-danger"><?= $pesan ?></p>
    <p class="btn-success"><?= $pesan2 ?></p>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="btn-success">Tahun Pembelajaran</th>
            <th class="btn-success">Pendaftar</th>
            <th class="btn-success">Diterima</th>
          </tr>
        </thead>
        <tbody>
          <?php $result = tampil_all('rasio');
          while ($data = mysqli_fetch_assoc($result)) :
            ?>
          <tr>
            <td class="btn-primary"><?= $data['tahun']?></td>
            <td class="btn-danger"><?= $data['pendaftar']?></td>
            <td class="btn-warning"><?= $data['diterima']?></td>
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
