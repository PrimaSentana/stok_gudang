<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'stok_gudang');

    if(mysqli_connect_errno()){
        echo "Error: " . mysqli_connect_error();
    }
?>