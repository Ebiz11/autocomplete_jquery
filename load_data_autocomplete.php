<?php
$dbh= new PDO('mysql: host=localhost; dbname=datatable', "root","");

$id = $_POST['parent_id'];
$query = $dbh->query("SELECT*FROM karyawan WHERE id_karyawan='$id' ");

  $response = array();
    while ($data = $query->fetch()) {
      $response[]=$data;
    };

  die(json_encode($response));
 ?>
