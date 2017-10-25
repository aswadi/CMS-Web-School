<!-- load file init -->
<?php require_once '../core/init-users.php'; ?>
<div class="container  konten">
  <h1><u>Visi Misi SMKN1 Rambutan</u></h1>
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
    Tujuan Pendidikan Menengah Kejuruan adalah meningkatkan kecerdasan pengetahuan,
       kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti
       pendidikan lebih lanjut sesuai dengan kejuruannya.
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
