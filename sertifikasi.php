<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERTIFIKASI</title>
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

        .container {
            border-radius: 5px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn {
            margin-right: 5px;
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Skema</h2>
        <a href="index.php"><button type="button" class="btn btn-success">Home</button></a>
        <a href="add_skema.php"><button type="button" class="btn btn-success">Add Skema</button></a>
        <br /><br />

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Skema</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah Unit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <!--Letak Proses Pencarian-->
            <?php
            include 'koneksi.php';
            $no = 1;
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $sql = mysqli_query($coon, "select * from tb_skema where kd_skema like '%" . $cari . "%'");
            } else {
                $sql = mysqli_query($coon, "select * from tb_skema");
            }
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $data['kd_skema']; ?></td>
                        <td><?php echo $data['nm_skema']; ?></td>
                        <td><?php echo $data['jenis']; ?></td>
                        <td><?php echo $data['jml_unit']; ?></td>
                        <td>
                            <a href="edit_skema.php?id=<?php echo $data['id_skema']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="delete_skema.php?id=<?php echo $data['id_skema'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
