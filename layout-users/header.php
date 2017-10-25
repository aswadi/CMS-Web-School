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
      <img class="imgleft" src="../assets/img/home/<?= $imgleft['foto']?>" alt="" />
    </div>
    <div class="col-md-8">
      <!-- <img class="imgright" src="assets/img/home/1.jpg" alt="" /> -->



  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php $tampil_slide1 = tampil('home', 'kondisi', 'slide1');
            $slide1 = mysqli_fetch_assoc($tampil_slide1);
      ?>
      <img class="first-slide" src="../assets/img/home/<?= $slide1['foto']?>" alt="First slide">
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
      <img class="second-slide" src="../assets/img/home/<?= $slide2['foto']?>" alt="Second slide">
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
    <img class="third-slide" src="../assets/img/home/<?= $slide3['foto']?>" alt="Third slide">
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
