<?php
include "conn.php";
$id         = $_POST['id_santri'];
$kode       = $_POST['kode_santri'];
$nama       = $_POST['nm_santri'];
$gender     = $_POST['gender'];
$tgl_lahir  = $_POST['tgl_lahir'];
$alamat     = $_POST['alamat'];
$phone      = $_POST['phone'];

$query = "UPDATE tm_santri (id_santri, kode_santri, nm_santri, gender, tgl_lahir, alamat, phone) 
        VALUES ('$id','$kode', '$nama','$gender', '$tgl_lahir', '$alamat', '$phone' ) WHERE id_santri=$id";
$EQuery= mysqli_connect($conn, $EQuery);