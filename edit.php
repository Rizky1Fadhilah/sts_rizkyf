<?php
include_once("cek_barang.php");
$sql = editData("barang", $_GET['id']);

if (isset($_POST["submit"])) {
    if(ubah($_POST) > 0) {
      echo "
        <script>
          alert ('data berhasil diubah!');
          document.location.href = 'barang.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('data gagal diubah!');
          document.location.href = 'barang.php';
        </script>
      ";
    }
  }
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <p>Silahkan Ubah Data Barang</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
            </figcaption>
        </figure>

        <div class="container mt-5">
            <form action="" method="post">
                <?php
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <div class="mb-3">
                    <label for="kode_brg" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_brg" name="kode_brg"  value="<?php echo $data['kode_brg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama_brg" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_brg" name="nama_brg"  value="<?php echo $data['nama_brg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk"  value="<?php echo $data['merk']; ?>">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah"  value="<?php echo $data['jumlah']; ?>">
                </div>
                

                <div class="mb-3 row">
                <button type='submit' name="submit" class='btn btn-primary'>Simpan Data</button>
            </form>
            <?php } ?>
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