<?php

include 'database.php';

function select($query)
{
    // panggil database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


$data_barang = select("SELECT * FROM barang")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>

    <div class="container">
        <!-- Navbar -->
        <nav class="navbar bg-primary navbar navbar-expand-lg" data-bs-theme="dark">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Transaksi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pembeli</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Penjual</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h7>Selamat Datang. </h7>
            <h7> Silahkan Klik Untuk melakukan Transaksi </h7>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Jenis Barang</th>
                    <th>KD Barang</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_barang as $barang) : ?>
                        <tr>
                            <td><?php $no++; ?></td>
                            <td><?php $barang['id_barang'] ?></td>
                            <td><?php $barang['jenis_barang'] ?></td>
                            <td><?php $barang['kd_barang'] ?></td>
                            <td width="15%">
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Jss Bosthrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="assets/fontawesome/js/all.js"></script>
</body>

</html>