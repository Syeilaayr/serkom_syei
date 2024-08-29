<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERTIFIKASI</title>
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
    <?php
    include "koneksi.php";
    $sql = mysqli_query($coon, "SELECT * FROM tb_skema WHERE id_skema = '$_GET[id]'") or die(mysqli_error($coon));
    $data = mysqli_fetch_array($sql);
    ?>
    <form name="edit" method="post" action="process_edit_skema.php">
        <input type="hidden" name="id" value="<?php echo $data['id_skema']; ?>">
        <div class="container">
            <h1>Edit Skema</h1>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="kd_skema" value="<?php echo $data['kd_skema']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Skema</label>
                <input type="text" class="form-control" name="nm_skema" value="<?php echo $data['nm_skema']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis" value="<?php echo $data['jenis']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Unit</label>
                <input type="text" class="form-control" name="jml_unit" value="<?php echo $data['jml_unit']; ?>">
            </div>

            <button type="submit" name="edit" class="btn btn-info">Submit</button>
            <a href="sertifikasi.php"><button type="button" class="btn btn-info">Back</button></a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
