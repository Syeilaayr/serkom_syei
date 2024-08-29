<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Peserta</title>
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

        .mb-3 {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-info {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <?php
    include "koneksi.php";
    $sql = mysqli_query($coon, "SELECT * FROM tb_peserta WHERE id_peserta = '$_GET[id]'") or die(mysqli_error($coon));
    $data = mysqli_fetch_array($sql);
    ?>

    <form name="edit" method="post" action="edit_process.php">
        <input type="hidden" name="id" value="<?php echo $data['id_peserta']; ?>">

        <div class="container">
            <h1>Edit Peserta</h1>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Skema</label>

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
                <label for="exampleInputPassword1" class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="nm_peserta" value="<?php echo $data['nm_peserta']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jekel" value="<?php echo $data['jekel']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No HP</label>
                <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp']; ?>">
            </div>

            <button type="submit" name="edit" class="btn btn-info">Submit</button>
            <a href="index.php"><button type="button" class="btn btn-info">Back</button></a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
