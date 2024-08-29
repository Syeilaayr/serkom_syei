<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            margin-top: 20px;
        }

        h1 {
            color: #007bff;
        }

        .container {
            border-radius: 5px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form name="tambah" method="post" action="tambah_process.php" enctype="multipart/form-data">
        <div class="container">
            <h1>Tambah Peserta</h1>

            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <!-- Menambahkan atribut name pada elemen select -->
                <?php
                // Menghubungkan ke database
                include 'koneksi.php';

                // Query untuk mengambil data skema dari tabel
                $query = "SELECT * FROM tb_skema";
                $result = mysqli_query($coon, $query);

                // Cek apakah query berhasil dieksekusi
                if ($result) {
                    echo '<select class="form-control" name="kd_skema" required>';
                    // Tambahkan pilihan default sebagai placeholder
                    echo '<option value="" disabled selected>Pilih Skema</option>';
                    // Loop through hasil query untuk membuat option
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['kd_skema'] . '">' . $row['kd_skema'] . ' - ' . $row['nm_skema'] . '</option>';
                    }
                    echo '</select>';
                } else {
                    // Jika query tidak berhasil dieksekusi
                    echo "Error: " . mysqli_error($coon);
                }

                // Tutup koneksi database
                mysqli_close($coon);
                ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="nm_peserta">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jekel">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>

            <div class="mb-3">
                <label class="form-label">No Hp</label>
                <input type="text" class="form-control" name="no_hp">
            </div>

            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
