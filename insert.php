<?php  
/*
  -- Mengambil data dari form
*/
include "conn.php";

$nm_santri 	= $_POST['nm_santri'];
$alamat 	= $_POST['alamat'];
$tgl_lahir 	= $_POST['tgl_lahir'];
$gender	 	= $_POST['gender'];
$phone 		= $_POST['phone'];

if (isset($_POST["proses"])) {

	$queryInsert = "INSERT INTO tm_santri (nm_santri, alamat,tgl_lahir, gender,  phone)
							VALUES ('$nm_santri' ,'$alamat', '$tgl_lahir', '$gender', '$phone' )";
	$exeQuery 	 = mysqli_query($conn, $queryInsert);

	if ($exeQuery) {
		echo "Data berhasil disimpan";
	}else
	{
		echo "Gagal menyimpan data";
	}
}

?>