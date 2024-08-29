<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengecek apakah data terkirim dengan benar
    if (isset($_POST['kd_skema'])) {
        // Menyimpan data dari formulir ke dalam variabel
        $kd_skema = $_POST['kd_skema'];
        $nm_peserta = $_POST['nm_peserta'];
        $jekel = $_POST['jekel'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];

        // Query untuk memasukkan data ke database
        $queryInsert = "INSERT INTO tb_peserta (kd_skema, nm_peserta, jekel, alamat, no_hp)
                        VALUES ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";
        $resultInsert = mysqli_query($coon, $queryInsert);

        // Menampilkan pesan hasil operasi penyimpanan data
        if ($resultInsert) {
            echo "Data Berhasil Ditambahkan. ";
            // Mengarahkan pengguna kembali ke halaman indeks
            header("Location: index.php");
            exit(); // Penting untuk menghentikan eksekusi kode selanjutnya setelah header
        } else {
            echo "Gagal Menambahkan Data. ";
        }

        // Menampilkan data yang dipilih dari formulir
        echo "Anda memilih Kode Skema dengan nilai: " . $kd_skema;
    } else {
        echo "Mohon pilih Kode Skema terlebih dahulu.";
    }
} else {
    echo "Metode tidak valid.";
}
?>
