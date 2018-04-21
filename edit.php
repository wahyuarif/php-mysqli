<?php
include "conn.php";
$id     = $_GET['id_santri'];
$query  = "SELECT * FROM tm_santri WHERE id_santri = $id";
$EQuery = mysqli_query($conn, $query);
while ($e = mysqli_fetch_array($EQuery)) { ?>
    <tr>
        <td>Nama</td>
        <td><input type="hidden" name="id_santri" value="<?php echo $e['id_santri'];?>"></td>
        <td><input type="text" name="nm_santri" value="<?php echo $e['nm_santri'];?>"></td>
    </tr>
<?php } ?>
