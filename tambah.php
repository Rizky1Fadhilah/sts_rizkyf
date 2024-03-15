<?php

include 'cek_barang.php';
// Query untuk mendapatkan daftar kode barang dari tabel Barang
$sql_barang = "SELECT kode_brg, nama_brg FROM barang";
$result_barang = mysqli_query($konek, $sql_barang);

// Query untuk mendapatkan daftar id user dari tabel User
$sql_user = "SELECT id, nama FROM user WHERE role = 'admin'";
$result_user = mysqli_query($konek, $sql_user);
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Manage Disini</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light ">
            <div class="container-fluid ">

                <a class="navbar-brand" href="Home" style="padding-start: 100px;"><strong>KELOLA DATA
                        BARANG</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <p>Data Peminjaman</p>
            </blockquote>
        </figure>

        <div class="container mt-5">
        <form action="peminjaman.php" method="post">
                            <div class="form-group">
                                <label for="tanggalpinjam">Tanggal pinjam</label>
                                <input type="date" class="form-control" id="tanggalpinjam" name="tanggal_pinjam" value="<?= isset($id['tanggal_pinjam']) ? date('Y-m-d') : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggalkembali">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tanggalkembali" name="tanggal_kembali" value="<?= isset($id['tanggal_kembali']) ? date('Y-m-d') : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="noidentitas">No identitas :</label>
                                <input type="text" class="form-control" id="noidentitas" name="no_identitas">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kode barang</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="kode_barang">
                                    <option value="">--PILIH--</option>
                                    <?php
                                    if (mysqli_num_rows($result_barang) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_barang)) {
                                            echo "
                                                        <option value='" . $row['kode_brg'] . "'>" . $row['kode_brg'] . " - " . $row['nama_brg'] . "</option>
                                                    ";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah </label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah">
                            </div>
                            <div class="form-group">
                                <label for="keperluan">Keperluan </label>
                                <input type="text" class="form-control" id="keperluan" name="keperluan">
                            </div>
                            <div class="form-group">
                                <label for="status">Status </label>
                                <input type="text" class="form-control" id="status" name="status">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">ID user</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_login">
                                    <option value="">--PILIH--</option>
                                    <?php
                                    if (mysqli_num_rows($result_user) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_user)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . " - " . $row['nama'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="button btn btn-primary" name="submit">
                            Kirim
                        </button>
                    </div>
                    </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

</html>

</div>

</div>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>