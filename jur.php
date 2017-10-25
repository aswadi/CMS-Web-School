

    <div id="jurusan">
      <h1 class="page-header">Jurusan</h1>

      <div class="row jurusan">

        <?php
        $result = tampil_all('jurusan');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <div class="col-lg-4"><br>
          <img class="" src="assets/img/home/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?= $data['nama']?></h2>
          <p><?= $data['penjelasan']?></p>
          <p><a class="btn btn-default" href="users/kurikulum.php" role="button">Cek Kurikulum &raquo;</a></p>
        </div>
      <?php endwhile; ?>

      </div>

    </div>
