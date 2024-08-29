<?php
include "koneksi.php";

$kd_skema = $_POST['kd_skema'];
$nm_skema = $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];

$query = "INSERT INTO tb_skema (kd_skema, nm_skema, jenis, jml_unit)
          VALUES ('$kd_skema', '$nm_skema', '$jenis', '$jml_unit')";
$result = mysqli_query($coon, $query) or die(mysqli_error($coon));

if ($result) {
    echo "Data Added Successfully";
    echo "<meta http-equiv='refresh' content='1; url=sertifikasi.php'>";
} else {
    echo "Failed to Add Data";
}
?>
