<!-- load file init -->
<?php require_once '../core/init-users.php'; ?>

<div class="container  konten">
  <h1><u>Kegiatan SMKN 1 Rambutan</u></h1>
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
