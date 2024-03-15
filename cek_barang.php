<?php
$konek=mysqli_connect("localhost","root","","sts_rizky");

function cek_login($username,$password) {
    global $konek;
    $uname = $username;
    $upass = $password;

    $sql = mysqli_query($konek,"SELECT * FROM user WHERE username = '$uname' AND pasword = '$upass'");
    $result = mysqli_num_rows($sql);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}

function tampil_data($data)
{
    global $konek;
    $sql = mysqli_query($konek, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($sql)) {
        $rows [] = $row;
    }
    return $rows;

}



function tambah_barang($data)
{
    global $konek;

    $kode_barang = htmlspecialchars($data['kode_brg']);
    $nama_barang = htmlspecialchars($data['nama_brg']);
    $kategori = htmlspecialchars($data['kategori']);
    $merk = htmlspecialchars($data['merk']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $sql = "INSERT INTO barang (id, kode_brg, nama_brg, kategori, merk, jumlah) VALUES (null, '$kode_barang', '$nama_barang', '$kategori', '$merk', '$jumlah')";

    if (mysqli_query($konek, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
        return false;
    }
}

function hapus($ids) {
    global $konek;
    
    $sql = mysqli_query($konek, "DELETE FROM barang WHERE id = '$ids'");
    return $sql;
}

function editdata($tablename, $id)
{
    global $konek;
    $sql = mysqli_query($konek, "SELECT * FROM $tablename WHERE id = '$id'");
    return $sql;
}

function ubah($data) {
    global $konek;

    $id = $data["id"];
    $barang = $data["kode_brg"];
    $nama_barang = $data["nama_brg"];
    $kategori = $data["kategori"];
    $merk = $data["merk"];
    $jumlah = $data["jumlah"];

    $query = "UPDATE barang set
                kode_brg = '$barang',
                nama_brg = '$nama_barang',
                kategori = '$kategori',
                merk = '$merk',
                jumlah = '$jumlah'

                WHERE id = $id;
                ";
    $sql = mysqli_query($konek,$query);
    return $sql;
}
