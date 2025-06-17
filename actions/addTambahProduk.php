<?php
    include 'db.php';

    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $satuan = $_POST['satuan'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok_minimal = $_POST['stok_minimal'];

    $data = mysqli_query($koneksi, "select kode_produk from produk order by kode_produk desc limit 1");
    $d = mysqli_fetch_array($data);

    if (!is_null($d)) {
        $kproduk = $d['kode_produk'];
        $a = substr($kproduk, 4);
        $b = (int) $a;
        $c = $b + 1;
        $d = strlen($c);
        $e = substr($a, 0, strlen($a) - $d);
        $f = "PGB-" . $e . $c;
        $kode_produk = $f;
    } else {
        $kode_produk = 'PGB-0001';
    }

    mysqli_query($koneksi, "INSERT INTO produk (kode_produk, nama_produk, deskripsi, satuan, harga_beli, harga_jual, stok_minimal) VALUES ('$kode_produk', '$nama_produk', '$deskripsi', '$satuan', '$harga_beli', '$harga_jual', '$stok_minimal')");

    header('location:../produk/main.php');    
?>