<?php
    require_once 'function/db.php';
    require_once 'function/home.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/png/logo.png">

    <title>Dashboard SMKN 1 Rambutan</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SMKN 1 RAMBUTAN</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li id="up"><a id="up" href="index.php">Overview</a></li>
            <li class="active"><a href="informasi/">Informasi <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="informasi/profil.php">Profil <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">Slide <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                $result = tampil_like('home','kondisi','slide');
                while ($data = mysqli_fetch_assoc($result)) :
                 ?>
                <li><a href="informasi/slide.php?id=<?= $data['id']?>">Slide <?= $data['id']?></a></li>
              <?php endwhile; ?>
                <li role="separator" class="divider"></li>
                <li><a href="informasi/slide.php">Semua Slide</a></li>
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
                <li><a href="informasi/sambutan.php?sambutan=<?= $data['judul']?>"><?= $data['judul']?></a></li>
              <?php endwhile; ?>
                <li role="separator" class="divider"></li>
                <li><a href="informasi/sambutan.php">Semua Sambutan</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">fasilitas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                $result = tampil('home','kondisi','fasilitas1');
                $fasilitas1 = mysqli_fetch_assoc($result)  ?>

                <li><a href="informasi/fasilitas.php?id=<?= $fasilitas1['id']?>">Fasilitas Utama 1</a></li>
                <?php
                $result = tampil('home','kondisi','fasilitas2');
                $fasilitas2 = mysqli_fetch_assoc($result)  ?>

                <li><a href="informasi/fasilitas.php?id=<?= $fasilitas2['id']?>">Fasilitas Utama 2</a></li>
                <?php
                $result = tampil('home','kondisi','fasilitas3');
                $fasilitas3 = mysqli_fetch_assoc($result)  ?>

                <li><a href="informasi/fasilitas.php?id=<?= $fasilitas3['id']?>">Fasilitas Utama 3</a></li>
                <li role="separator" class="divider"></li>
                <?php
                $result = tampil('home','kondisi','fasilitas');
                while ($data = mysqli_fetch_assoc($result)) :
                 ?>
                <li><a href="informasi/fasilitas.php?id=<?= $data['id']?>">Fasilitas Tambahan</a></li>
              <?php endwhile; ?>
                <li role="separator" class="divider"></li>
                <li><a href="informasi/fasilitas.php">Semua fasilitas</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
            <!-- <li><a href="#">Export</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="users/">Users</a></li>
            <li><a href="users/tenaga-pendidik.php">Tenaga Pendidik</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">Siswa <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                $result = tampil_all('kelas');
                while ($data = mysqli_fetch_assoc($result)) :
                 ?>
                <li><a href="users/siswa.php?kelas=<?= $data['kelas']?>"><?= $data['kelas']?></a></li>
              <?php endwhile; ?>
                <li role="separator" class="divider"></li>
                <li><a href="users/siswa.php">Semua Siswa</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
            <li><a href="users/admin.php">Admin</a></li>
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

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <h1>30</h1>
              <h4>Tenaga Pendidik</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h1>140</h1>
              <h4>Siswa</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h1>1</h1>
              <h4>Admin</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h1>3</h1>
              <h4>Calon Siswa Baru</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-1.12.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/jquery-1.12.3.min.js"><\/script>')</script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
