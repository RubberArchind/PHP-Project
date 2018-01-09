<?php
include 'koneksi.php';
if(isset($_GET["in"])){
$id = $_GET["id_murid"];
$nama = $_GET["nama"];
$kelas = $_GET["kelas"];
$tambah = mysqli_query($koneksi,"insert into absen_murid(id_murid,nama_murid,kelas) values ('$id','$nama','$kelas')");
if ($tambah){
echo "Data berhasil di simpan!";
}
else{
	echo"Data Gagal Disimpan";
}
}
?>