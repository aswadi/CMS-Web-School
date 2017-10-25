    <!-- load file init -->
    <?php require_once '../core/init-users.php'; ?>

    <?php
     if (isset($_POST['daftar'])) {
       $nama = $_POST['nama'];
       $tempat_lahir = $_POST['tempat_lahir'];
       $tanggal_lahir = $_POST['tanggal_lahir'];
       $jk = $_POST['jk'];
       $agama = $_POST['agama'];
       $hp = $_POST['hp'];
       $email = $_POST['email'];
       $alamat = $_POST['alamat'];
       $asal_sekolah = $_POST['asal_sekolah'];
       $tahun_lulus = $_POST['tahun_lulus'];
       $ijazah = $_POST['ijazah'];
       $skhu = $_POST['skhu'];
       $jurusan = $_POST['jurusan'];
       $foto = $_POST['foto'];

       daftar($nama, $tempat_lahir, $tanggal_lahir, $jk,
                 $agama, $hp, $email, $alamat, $asal_sekolah, $tahun_lulus, $ijazah,
                 $skhu, $jurusan, $foto);
        header('Location:daftar.php');

     }

     ?>


    <!-- konten messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container  konten">
      <img class="hai" src="../assets/img/home/assistant.png" alt="" />Haiii..!
      <h1>Selamat Datang Untuk Bergabung, <br>
        Silahkan Lengkapi Data Berikut Untuk Mendaftar Secara Online..!</h1>
      <hr class="featurette-divider">
      <!-- Three columns of Kelas -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/home/detective.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Lengkapi Data Pribadi</h2>
          <form class="" action="" method="post">
            <label for="nama">Nama Lengkap :</label>
            <input type="text" name="nama" value="" placeholder="Muhammad Aswadi"><br><br>
            <label for="tempat_lahir">Tempat Lahir :</label>
            <input type="text" name="tempat_lahir" value="" placeholder="Banyuasin"><br><br>
            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="text" name="tanggal_lahir" value="" placeholder="03 November 1996"><br><br>
            <!-- <label>Gender</label> -->
    				<!-- <select name="gender" class="form-control" required>
    					<option>Laki-laki</option>
    					<option>Perempuan</option>
            </select> -->
            <label for="jk">Jenis Kelamin :</label>
            <select class="" name="jk">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select><br><br>
            <!-- <input type="text" name="jk" value="" placeholder="Pria"><br><br> -->
            <label for="agama">Agama :</label>
            <input type="text" name="agama" value="" placeholder="Islam"><br><br>
            <label for="hp">No Telp/Hp :</label>
            <input type="text" name="hp" value="" placeholder="082182752055"><br><br>
            <label for="email">Email :</label>
            <input type="email" name="email" value="" placeholder="Name@Xample.com"><br><br>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" rows="8" cols="40"></textarea>
            <p class="peringatan">
               *Isi Data dengan Benar.
            <p>
          <a class="btn btn-default" href="" role="button">Lengkap</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/home/postman.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Lengkapi Berkas</h2>
          <!-- <form class="" action="" method="post"> -->
            <label for="asalsekolah">Asal Sekolah :</label>
            <input type="text" name="asalsekolah" value="" placeholder="SMPN 1 RAMBUTAN"><br><br>
            <label for="tahunlulus">Tahun Lulus :</label>
            <input type="text" name="tahunlulus" value="" placeholder="2015"><br><br>
            <label for="ijazah">Silahkan Pilih File Ijazah SMP/Mts :</label>
            <input type="file" name="ijazah" value="">
            <label for="skhu">Silahkan Pilih File SKHU SMP/Mts :</label>
            <input type="file" name="skhu" value="">
            <label for="skhu">Silahkan Pilih File Foto :</label>
            <input type="file" name="foto" value="">
          <!-- </form> -->
          <p class="peringatan">
             *Format File Yang di Upload Haruslah .pdf <br>
             *Format Foto Yang di Upload Haruslah .jpg
          <p>
          <a class="btn btn-default" href="#" role="button">Lengkap</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/home/journalist.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Yang Harus di Pilih</h2>
          <!-- <form class="" action="" method="post"> -->
            <p>
              <h3>Silahkan Pilih Jurusan</h3>
            </p>
            <label for="jurusan">Jurusan :</label>
            <select class="" name="jurusan">
              <?php
              $result = tampil_all('jurusan');
              while ($data = mysqli_fetch_assoc($result)) :
               ?>
                <option value="<?= $data['nama']?>"><?= $data['nama']?></option>
              <?php endwhile; ?>
            </select><br><br>
          </form>
          <p class="peringatan">
            *Harap Tidak Salah Dalam Menentukan Jurusan Yang di Pilih,
            Karena Akan Berdampak Pada Mata Pelajaran Yang Akan di Pelajari Selama Bersekolah
            di SMKN 1 Rambutan <br>
            <h3 class="peringatan">*Isi Data dengan Lengkap dan Benar.</h3>
          <p>
            <input class="btn btn-primary" type="submit" name="daftar" value="daftar">
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
