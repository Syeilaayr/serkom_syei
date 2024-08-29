<?php
include "koneksi.php";

// Mengambil data dari $_POST
$kd_skema = $_POST['kd_skema'];
$nm_peserta = $_POST['nm_peserta'];
$jekel = $_POST['jekel'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$id_peserta = $_POST['id'];

// Melakukan update data
$query = "UPDATE tb_peserta 
          SET kd_skema = '$kd_skema',
              nm_peserta = '$nm_peserta',
              jekel = '$jekel',
              alamat = '$alamat',
              no_hp = '$no_hp'
          WHERE id_peserta = '$id_peserta'";
$result = mysqli_query($coon, $query) or die(mysqli_error($coon));

// Menampilkan pesan setelah berhasil atau gagal update
if ($result) {
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
} else {
    echo "Failed to edit data";
}
?>
