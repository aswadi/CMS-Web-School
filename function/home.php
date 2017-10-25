<?php


function tampil($table, $field, $k)
{
  global $link;
  $query  = "SELECT * FROM $table WHERE $field = '$k'";
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
function tampil_all_desc($table)
{
  global $link;
  $query  = "SELECT * FROM $table ORDER BY id desc";
  $result = mysqli_query($link, $query);
  return $result;
}

function cek_lulus($nis)
{
  global $link;
  $query = "SELECT * FROM cek_lulus WHERE nis = $nis";
  $result = mysqli_query($link, $query);

  return $result;
}

 ?>
