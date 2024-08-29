<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD SKEMA</title>
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
    <form name="tambah" method="post" action="process_add_skema.php" enctype="multipart/form-data">
        <div class="container">
            <h1>ADD SKEMA</h1>

            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="kd_skema">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <input type="text" class="form-control" name="nm_skema">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Unit</label>
                <input type="text" class="form-control" name="jml_unit">
            </div>

            <button type="submit" name="tambah" class="btn btn-info">Submit</button>
            <a href="sertifikasi.php"><button type="button" class="btn btn-info">Back</button></a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
