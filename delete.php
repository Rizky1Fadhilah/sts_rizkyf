<?php
    require_once("cek_barang.php");

    $ids = $_GET["id"];

  if(hapus($ids) > 0) {
    echo "
      <script>
        alert ('data berhasil dihapus!');
        document.location.href = 'barang.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal dihapus!');
        document.location.href = 'barang.php';
      </script>
    ";
  }

?>