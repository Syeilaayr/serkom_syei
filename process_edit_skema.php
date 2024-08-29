<?php
include "koneksi.php";

// Mengambil data dari $_POST
$kd_skema = $_POST['kd_skema'];
$nm_skema = $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];

// Melakukan update data
$query = "UPDATE tb_skema 
          SET nm_skema = '$nm_skema',
              jenis = '$jenis',
              jml_unit = '$jml_unit'
          WHERE kd_skema = '$kd_skema'";
$result = mysqli_query($coon, $query) or die(mysqli_error($coon));

// Menampilkan pesan setelah berhasil atau gagal update
if ($result) {
    echo "<meta http-equiv='refresh' content='1; url=sertifikasi.php'>";
} else {
    echo "Failed to edit data";
}
?>