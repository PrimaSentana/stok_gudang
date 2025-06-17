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
      overflow: hidden; /* Hindari scroll pada body */
    }

    .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
            text-align: center;
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
      overflow-y: auto;
      width: calc(100% - 250px);
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
    <h2>Daftar Produk</h2>
    <p>Halaman ini untuk melihat daftar barang yang tersedia.</p>

    <div class="mb-3 d-flex justify-content-between">
      <div>
        <a href="viewTambahProduk.php"><button class="btn btn-primary">Tambah Produk</button></a>
      </div>
      <div>
        <input type="date" class="form-control d-inline-block" style="width: auto;">
        <input type="date" class="form-control d-inline-block" style="width: auto;">
        <button class="btn btn-info text-white">Filter</button>
      </div>
    </div>

    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Produk</th>
          <th>Deskripsi</th>
          <th>Satuan</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok Minimal</th>
          <th>Tanggal Buat</th>
          <th>Tanggal Diperbarui</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include '../actions/db.php';
          $no = 1;
          $data = mysqli_query($koneksi,"SELECT * FROM produk");
          while($d = mysqli_fetch_array($data)) {
        ?>  
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $d['kode_produk']?></td>
          <td><?php echo $d['nama_produk']?></td>
          <td><?php echo $d['deskripsi']?></td>
          <td><?php echo $d['satuan']?></td>
          <td><?php echo $d['harga_beli']?></td>
          <td><?php echo $d['harga_jual']?></td>
          <td><?php echo $d['stok_minimal']?></td>
          <td><?php echo $d['tanggal_buat']?></td>
          <td><?php echo $d['tanggal_diperbarui']?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
