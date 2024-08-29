<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            margin-top: 20px;
        }

        h2 {
            color: #007bff;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            text-align: center;
            padding: 15px;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn {
            margin-right: 5px;
        }

        .container {
            border-radius: 5px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Peserta</h2>
        <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
        <a href="tambah.php"><button type="button" class="btn btn-success">Add Participants</button></a>
        <a href="sertifikasi.php"><button type="button" class="btn btn-success">Certification</button></a>
        <br /><br />
        <form action="index.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari" class="btn btn-info">
        </form>

        <!--Letak Form Pencarian-->
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : " . $cari . "</b>";
        }
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <!--Letak Proses Pencarian-->
            <?php
            include 'koneksi.php';
            $no = 1;
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $sql = mysqli_query($coon, "select * from tb_peserta where nm_peserta like '%" . $cari . "%'");
            } else {
                $sql = mysqli_query($coon, "select * from tb_peserta");
            }
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $data['kd_skema']; ?></td>
                        <td><?php echo $data['nm_peserta']; ?></td>
                        <td><?php echo $data['jekel']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id_peserta']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="delete.php?id=<?php echo $data['id_peserta'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
            <?php
                $no++;
            }
            ?>
                </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
