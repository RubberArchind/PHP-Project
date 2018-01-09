<?php
include ("koneksi.php");
if(isset($_POST["submit"])){
$id = $_POST["id_murid"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$update = mysqli_query($koneksi,'update absen_murid set id_murid="'.$id.'", nama_murid="'.$nama.'" , kelas="'.$kelas.'"');
if($update){
echo "Data Berhasil Disimpan ,<a href='index.php'>back</a>";
}
else{
echo "Gagal Update <a href='edit.php?id=".$id."'> disini</a>";
}
}
?>