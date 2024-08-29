<?php
include "koneksi.php";

$id_skema = $_GET['id'];

$query = "DELETE FROM tb_skema WHERE id_skema = '$id_skema'";
$result = mysqli_query($coon, $query) or die(mysqli_error($coon));

if ($result) {
    echo "Data Deleted Successfully";
    echo "<meta http-equiv='refresh' content='1; url=sertifikasi.php'>";
} else {
    echo "Failed to Delete Data";
}

?>