<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li id="up"><a id="up" href="../">Overview</a></li>
    <li class="active"><a href="index.php">Informasi <span class="sr-only">(current)</span></a></li>
    <li class=""><a href="profil.php">Profil <span class="sr-only">(current)</span></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">Slide <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php
        $result = tampil_like('home','kondisi','slide');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <li><a href="slide.php?id=<?= $data['id']?>">Slide <?= $data['id']?></a></li>
      <?php endwhile; ?>
        <li role="separator" class="divider"></li>
        <li><a href="slide.php">Semua Slide</a></li>
        <li role="separator" class="divider"></li>
        <!-- <li class="dropdown-header">Nav header</li>
        <li><a href="#">Separated link</a></li>
        <li><a href="#">One more separated link</a></li> -->
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">Sambutan <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php
        $result = tampil('home','kondisi','sambutan');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <li><a href="sambutan.php?sambutan=<?= $data['judul']?>"><?= $data['judul']?></a></li>
      <?php endwhile; ?>
        <li role="separator" class="divider"></li>
        <li><a href="sambutan.php">Semua Sambutan</a></li>
        <li role="separator" class="divider"></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">fasilitas <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php
        $result = tampil('home','kondisi','fasilitas1');
        $fasilitas1 = mysqli_fetch_assoc($result)  ?>

        <li><a href="fasilitas.php?id=<?= $fasilitas1['id']?>">Fasilitas Utama 1</a></li>
        <?php
        $result = tampil('home','kondisi','fasilitas2');
        $fasilitas2 = mysqli_fetch_assoc($result)  ?>

        <li><a href="fasilitas.php?id=<?= $fasilitas2['id']?>">Fasilitas Utama 2</a></li>
        <?php
        $result = tampil('home','kondisi','fasilitas3');
        $fasilitas3 = mysqli_fetch_assoc($result)  ?>

        <li><a href="fasilitas.php?id=<?= $fasilitas3['id']?>">Fasilitas Utama 3</a></li>
        <li role="separator" class="divider"></li>
        <?php
        $result = tampil('home','kondisi','fasilitas');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <li><a href="fasilitas.php?id=<?= $data['id']?>">Fasilitas Tambahan</a></li>
      <?php endwhile; ?>
        <li role="separator" class="divider"></li>
        <li><a href="fasilitas.php">Semua fasilitas</a></li>
        <li role="separator" class="divider"></li>
      </ul>
    </li>
    <!-- <li><a href="#">Export</a></li> -->
  </ul>
  <ul class="nav nav-sidebar">
    <li class="active"><a href="../users/">Users</a></li>
    <li><a href="../users/tenaga-pendidik.php">Tenaga Pendidik</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">Siswa <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php
        $result = tampil_all('kelas');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <li><a href="../users/siswa.php?kelas=<?= $data['kelas']?>"><?= $data['kelas']?></a></li>
      <?php endwhile; ?>
        <li role="separator" class="divider"></li>
        <li><a href="../users/siswa.php">Semua Siswa</a></li>
        <li role="separator" class="divider"></li>
      </ul>
    </li>
    <li><a href="../users/admin.php">Admin</a></li>
    <li class="active"><a href="users/calon-siswa.php">Calon Siswa</a></li>
  </ul>
  <ul class="btn btn-lg btn-success"><?php echo date('D-M-Y'); ?>
  </ul>
  <!-- <ul class="nav nav-sidebar">
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
  </ul> -->
</div>
