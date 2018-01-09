<html>
<head>
</head>
<body>
<?php 
include("koneksi.php");
$id = $_GET["id"];
$tampil = mysqli_query($koneksi,"select * from absen_murid where id_murid='$id'");
if (mysqli_num_rows($tampil)==0)
{
echo "Data Tidak Ada";
}
else{
$data = mysqli_fetch_assoc($tampil);
}
?>
<form action="edit_proses.php" method="post">
<table>
<tr><td> id_murid </td><td> <input type="text" name="id_murid" value="<?php echo $data["id_murid"]?>" required></td></tr>
<tr><td> Nama Murid </td><td> <input type="text" name="nama" value="<?php echo $data["nama_murid"]?>" required></td></tr>
<tr><td> Kelas </td><td> <input type="text" name="kelas" value="<?php echo $data["kelas"]?>" required></td></tr>
<tr><td> <input type="submit" name="submit" value="Submit">
</html>