<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barang Keluar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background-color: #343a40;
      color: white;
      padding: 1rem;
    }

    .main-content {
      margin-left: 250px;
      padding: 1.5rem;
      height: 100vh;
      width: calc(100% - 250px);
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f8f9fa;
    }

    .container {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      width: 100%;
      max-width: 1100px;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
      
    }

    .container label {
      font-weight: 500;
      margin-top: 10px;
    }

    .container input[type="submit"] {
      margin-top: 20px;
      width: 100%;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h5 class="mb-4">PGB STOK</h5>
    <ul class="nav flex-column">
      <li class="nav-item"><a href="#" class="nav-link text-white">🏠 Stok Barang</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-white">📦 Barang Masuk</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-white">🚚 Barang Keluar</a></li>
      <li class="nav-item"><a href="../login.php" class="nav-link text-white">🔐 Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <form action="../actions/addTambahProduk.php" method="POST">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>

        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>

        <label for="satuan">Satuan</label>
        <input type="text" name="satuan" id="satuan" class="form-control" required>

        <label for="harga_beli">Harga Beli</label>
        <input type="number" name="harga_beli" id="harga_beli" class="form-control" required>

        <label for="harga_jual">Harga Jual</label>
        <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>

        <label for="stok_minimal">Stok Minimal</label>
        <input type="number" name="stok_minimal" id="stok_minimal" class="form-control" required>

        <input type="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
