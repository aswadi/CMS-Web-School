<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/png/logo.png">
    <title>SMKN 1 RAMBUTAN</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/foto.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="menu konten">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container konten">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">SMKN 1 RAMBUTAN</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">HOME</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="view/profil-sekolah.php">Profil Sokolah</a></li>
                    <li><a href="view/visimisi.php">Visi Misi</a></li>
                    <li><a href="view/kepala-sekolah.php">Kepala Sekolah</a></li>
                    <li><a href="users/tenaga-pendidik.php">Tenaga Pendidik</a></li>
                    <li role="separator" class="divider"></li>
                  </ul>
                </li>
                <!-- <li><a href="#" onclick="return smootScroll('pejabat')">PROFIL</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KURIKULUM<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="view/paket-kopetensi.php">Paket Kopetensi</a></li>
                    <li><a href="view/struktur-kurikulum.php">Struktur Kurikulum</a></li>
                    <li role="separator" class="divider"></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KESISWAAN<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="view/osis.php">OSIS</a></li>
                    <li><a href="view/pramuka.php">Pramuka</a></li>
                    <li><a href="view/kesiswaan-lainnya.php">Lainnya</a></li>
                    <li><a href="view/siswa.php">SISWA</a></li>
                    <li role="separator" class="divider"></li>
                  </ul>
                </li>
                <li><a href="view/sarpras.php">SARPRAS</a></li>
                <li><a href="view/ppdb.php">PPDB</a></li>
                <!-- <li><a href="#" onclick="return smootScroll('fasilitas')">PENGUMUMAN</a></li> -->

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="view/pengumuman.php">PENGUMUMAN..!</a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel ================================================== -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="row slide">
        <div class="col-md-4">
          <?php $tampil_imgleft = tampil('home', 'kondisi', 'imgleft');
                $imgleft = mysqli_fetch_assoc($tampil_imgleft);
          ?>
          <img class="imgleft" src="assets/img/home/<?= $imgleft['foto']?>" alt="" />
        </div>
        <div class="col-md-8">
          <!-- <img class="imgright" src="assets/img/home/1.jpg" alt="" /> -->



      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <?php $tampil_slide1 = tampil('home', 'kondisi', 'slide1');
                $slide1 = mysqli_fetch_assoc($tampil_slide1);
          ?>
          <img class="first-slide" src="assets/img/home/<?= $slide1['foto']?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?= $slide1['judul']?></h1>
              <p>
                <?= $slide1['penjelasan']?>
              </p>
              <p><a class="btn btn-lg btn-primary" href="<?= $slide1['link']?>" role="button">Daftar Sekarang!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php $tampil_slide2 = tampil('home', 'kondisi', 'slide2');
                $slide2 = mysqli_fetch_assoc($tampil_slide2);
          ?>
          <img class="second-slide" src="assets/img/home/<?= $slide2['foto']?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?= $slide2['judul']?></h1>
              <p><?= $slide2['penjelasan']?>
              <p><a class="btn btn-lg btn-primary" href="<?= $slide2['link']?>" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php $tampil_slide3 = tampil('home', 'kondisi', 'slide3');
                $slide3 = mysqli_fetch_assoc($tampil_slide3);
          ?>
        <img class="third-slide" src="assets/img/home/<?= $slide3['foto']?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?= $slide3['judul']?></h1>
              <p><?= $slide3['penjelasan']?></p>
              <p><a class="btn btn-lg btn-primary" href="<?= $slide3['link']?>" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- /.carousel -->


<div class="bungkus">
  <!-- <h1>
    <marquee>
      Selamat Datang di Website Resmi SMKN 1 Rambutan,
               Semoga Informasi Yang Kami Berikan Dapat Bermanfaat
    </marquee>
 </h1> -->
    <div class="container konten">
      <div id="pejabat">
        <!-- <h1 class="page-header">Sambutan </h1> -->
        <!-- mulai pejabat -->
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-md-10 col-md-push-2">
          <?php
          $result = tampil('home','kondisi','sambutan');
          while ($data = mysqli_fetch_assoc($result)) :
           ?>
          <div class="col-lg-4 sambutan">
            <img class="img-circle" src="assets/img/home/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?= $data['judul']?></h2>
            <h2><?= $data['judul_dua']?></h2>
            <p><?= $data['penjelasan']?></p>
            <!-- <p><a class="btn btn-default" href="#" role="button">Keren</a></p> -->
          </div><!-- /.col-lg-4 -->
        <?php endwhile; ?>
        <?php
        $result = tampil_all('jurusan');
        while ($data = mysqli_fetch_assoc($result)) :
         ?>
        <div class="col-lg-4"><br>
          <img class="" src="assets/img/home/<?= $data['foto']?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?= $data['nama']?></h2>
          <p><?= $data['penjelasan']?></p>
          <p><a class="btn btn-default" href="users/kurikulum.php" role="button">Cek Kurikulum &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      <?php endwhile; ?>
        </div>
        <div class="col-md-2 col-md-pull-10">
        <h1 class="btn btn-success"><?php echo date('D-M-Y'); ?></h1>
            <!-- <h3>Pengunjung</h3>
          <script id="_wau019">var _wau = _wau || []; _wau.push(["classic", "wgitjjixdg1a", "019"]);
          (function() {var s=document.createElement("script"); s.async=true;
          s.src="//widgets.amung.us/classic.js";
          document.getElementsByTagName("head")[0].appendChild(s);
          })();</script>
          <p>
            <script type="text/javascript" src="http://feedjit.com/serve/?vv=1515&amp;tft=3&amp;dd=0&amp;wid=&amp;pid=0&amp;proid=0&amp;bc=FFFFFF&amp;tc=000000&amp;brd1=012B6B&amp;lnk=135D9E&amp;hc=FFFFFF&amp;hfc=2853A8&amp;btn=C99700&amp;ww=200&amp;went=10">
            </script><noscript><a href="http://feedjit.com/">Live Traffic Stats</a></noscript> -->
          </p>
        </div>
      </div>

      </div>
      <!-- end pejabat -->
      <!-- <hr class="featurette-divider"> -->
      <!-- Three columns of Jurusan -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
    <div id="fasilitas">

    <!-- mulai fasilitas -->

      <div class="row featurette f1">
        <div class="col-md-7">
          <?php $tampil_fasilitas1 = tampil('home', 'kondisi', 'fasilitas1');
                $fasilitas1 = mysqli_fetch_assoc($tampil_fasilitas1);
          ?>
          <h2 class="featurette-heading"><?= $fasilitas1['judul']?></h2>
          <p class="lead"><?= $fasilitas1['penjelasan']?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/img/home/<?= $fasilitas1['foto']?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <?php $tampil_fasilitas2 = tampil('home', 'kondisi', 'fasilitas2');
                $fasilitas2 = mysqli_fetch_assoc($tampil_fasilitas2);
          ?>
          <h2 class="featurette-heading"><?= $fasilitas2['judul']?></span></h2>
          <p class="lead"><?= $fasilitas2['penjelasan']?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="assets/img/home/<?= $fasilitas2['foto']?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider ">

      <div class="row featurette f3">
        <div class="col-md-7">
          <?php $tampil_fasilitas3 = tampil('home', 'kondisi', 'fasilitas3');
                $fasilitas3 = mysqli_fetch_assoc($tampil_fasilitas3);
          ?>
          <h2 class="featurette-heading"><?= $fasilitas3['judul']?></h2>
          <p class="lead"><?= $fasilitas3['penjelasan']?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/img/home/<?= $fasilitas3['foto']?>" alt="Generic placeholder image">
        </div>
      </div>
    </div>
    <!-- end fasilitas -->

      <hr class="featurette-divider ">

      <?php
            $tampil_fasilitas = tampil('home', 'kondisi', 'fasilitas');
            while ($fasilitas = mysqli_fetch_assoc($tampil_fasilitas)):

      ?>
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5  ">

          <h2 class="featurette-heading lapangan"><?= $fasilitas['judul']?></span></h2>
          <p class="lead"><?= $fasilitas['penjelasan']?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="assets/img/home/<?= $fasilitas['foto']?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
    <?php endwhile; ?>
      <!-- /END THE FEATURETTES -->
      <!-- galeri mulai -->

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h1>galeri SMKN 1 Rambutan</h1>
          <?php
                $tampil_foto = tampil_all('galeri');
                while ($data = mysqli_fetch_assoc($tampil_foto)):
          ?>
          <div class="col-md-3">
            <img class="galeri"  src="assets/img/home/<?= $data['foto']?>" alt="" onclick="ganti_gambar(this)">
          </div>
        <?php endwhile; ?>

          <!-- <p class="lead">isjdisdx</p> -->
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img id="target_gambar" class="featurette-image img-responsive center-block" src="assets/img/home/logoleft.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <!-- galeri foto -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 SMKN 1 RAMBUTAN, by <a href="http://www.facebook.com/aswadi.dev">Muhammad Aswadi</a>
          <!-- . &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> -->
        </p>
      </footer>


    </div><!-- /.container -->


  </div>
  <!-- end bungkus -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.12.3.min.js"></script>
    <script src="assets/js/scrol.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.12.3.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
