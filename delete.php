<?php
include "koneksi.php";

$id_peserta = $_GET['id'];

$query = "DELETE FROM tb_peserta WHERE id_peserta = '$id_peserta'";
$result = mysqli_query($coon, $query) or die(mysqli_error($coon));

if ($result) {
    echo "Data Deleted Successfully";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
} else {
    echo "Failed to Delete Data";
}

?>
