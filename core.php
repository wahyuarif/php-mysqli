<?php  
$nama 	= $_POST['nama'];
$alamat	= $_POST['alamat'];

if (isset($_POST['proses'])) {
	echo $nama.' '.$alamat;
}

?>