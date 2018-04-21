<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
		#head {
  		text-align: : left;
		color: hotpink;
		/*width: 100pt;*/
		font-weight: bold;
		font-size: 14;
		}
		#t1{
			width: 100%;
			border-collapse: collapse;
		}

	</style>
<form action="login.php" method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" Value="Login"></td>
		</tr>
	</table>
</form>

<table id="t1">
	<h1>Data Santri</h1>
	<hr width="20%" align="left">
	<a href="add.php">Tambah Data</a>
	<tr>
		<td><div id="head">Nomor</div></td>
		<td><div id="head">Nama</div></td>
		<td><div id="head">Alamat</div></td>
		<td><div id="head">Gender</div></td>
		<td><div id="head">Tanggal Lahir</div></td>
		<td><div id="head">No Hp</div></td>
		<td colspan="2"><div id="head">Action</div></td>

	</tr>
	<?php  
	include("conn.php");
	// session_start();
	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 	$myUname = mysqli_reall_escape_string($conn, $_POST['username']);
	// 	$myPass  = mysqli_reall_escape_string($conn, $_POST['password']);
	// 	$sql 	 = "SELECT id FROM tm_santri ";
	
	// }
	$queryTampil = "SELECT * FROM tm_santri ORDER BY id_santri";
	$exeQuery	 = mysqli_query($conn, $queryTampil);
	$no = 1;
	while ($r = mysqli_fetch_array($exeQuery)) { ?>
	<tr>
		<td><?php echo $no++;  ?></td>
		<td><?php echo $r['nm_santri'];  ?></td>
		<td><?php echo $r['alamat'];  ?></td>
		<td><?php echo $r['gender'];  ?></td>
		<td><?php echo $r['tgl_lahir'];  ?></td>
		<td><?php echo $r['phone'];  ?></td>
		<td><a href="edit.php?id_santri=<?php echo $r['id_santri'] ?>">Edit</a></td>
		<td>B</td>
		<!-- <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> -->
	</tr>
	<?php } ?>
</table>
</body>
</html>