<?php
include ("koneksi.php");
echo '<h2 align=center>DATA SISWA</h2>';
$read = mysqli_query($koneksi,"select * from absen_murid");
echo '<table border=1 align="center" >
<tr>
<td>
<h3>
<center>id_murid </td>
<td><h3><center> Nama murid </td>
<td><h3><center> Kelas </td>
<td><h3><center><a href=form_input.php>Tambah</td>
</tr>
';

while ($data = mysqli_fetch_assoc($read)){
echo '<tr><td>'.$data["id_murid"].'</td>
<td>'.$data["nama_murid"].'</td>
<td>'.$data["kelas"].'</td>

<td><a href="edit.php?id='.$data["id_murid"].'"name="edit"> Edit</a></td>
<td><a href="hapus.php?id='.$data["id_murid"].'"name="hapus"> Hapus </a></td>
<tr>';
}
?>