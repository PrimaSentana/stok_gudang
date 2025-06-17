<?php
    try{
        $koneksi = mysqli_connect("localhost", "root", "", "stok_gudang");
    } catch(mysqli_sql_exception) {
        echo "Gagal Terhubung";
    }

    if ($koneksi) {
        echo "Berhasil Terhubung";
    }
?>