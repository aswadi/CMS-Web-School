<?php


function tampil($table, $field, $k)
{
  global $link;
  $query  = "SELECT * FROM $table WHERE $field = '$k'";
  $result = mysqli_query($link, $query);
  return $result;
}

function tampil_like($table, $field, $k)
{
  global $link;
  $query  = "SELECT * FROM $table WHERE $field like'%$k%'";
  $result = mysqli_query($link, $query);
  return $result;
}

function tampil_2k($table, $field1, $k1, $field2, $k2)
{
  global $link;
  $query  = "SELECT * FROM $table WHERE $field1 = '$k1' and $field2 = '$k2' ";
  $result = mysqli_query($link, $query);
  return $result;
}

function tampil_all($table)
{
  global $link;
  $query  = "SELECT * FROM $table";
  $result = mysqli_query($link, $query);
  return $result;
}


// Daftar siswa baru
function daftar($nama, $tempat_lahir, $tanggal_lahir, $jk,
          $agama, $hp, $email, $alamat, $asal_sekolah, $tahun_lulus, $ijazah,
          $skhu, $jurusan, $foto)
{
  global $link;
  $query = "INSERT INTO `calon_siswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`,
            `hp`, `email`, `alamat`, `asal_sekolah`, `tahun_lulus`, `ijazah`, `skhu`, `jurusan`, `foto`)
            VALUES (NULL, '$nama', '$tempat_lahir', '$tanggal_lahir', '$jk', '$agama',
            '$hp,', '$email', '$alamat', '$asal_sekolah', '$tahun_lulus', '$ijazah',
             '$skhu', '$jurusan', '$foto')";
  $result = mysqli_query($link, $query);

}


 ?>
