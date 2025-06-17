<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <form action="../actions/addTambahProduk.php" method="POST">
        <label for="nama_produk">Nama Produk</label> <br>
        <input type="text" name="nama_produk" id="nama_produk"> <br>
        
        <label for="deskripsi">Deskripsi</label> <br>
        <input type="text" name="deskripsi" id="deskripsi"> <br>
        
        <label for="satuan">Satuan</label> <br>
        <input type="text" name="satuan" id="satuan"> <br>
        
        <label for="harga_beli">Harga Beli</label> <br>
        <input type="number" name="harga_beli" id="harga_beli"> <br>

        <label for="harga_jual">Harga Jual</label> <br>
        <input type="number" name="harga_jual" id="harga_jual"> <br>

        <label for="stok_minimal">Stok Minimal</label> <br>
        <input type="number" name="stok_minimal" id="stok_minimal"> <br>

        <input type="submit" value="Submit">
    </form>    
</body>
</html>

