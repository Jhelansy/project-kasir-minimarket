
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir Minimarket</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            background: #243447;
            color: white;
            position: fixed;
            padding: 25px 15px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 35px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 14px;
            margin-bottom: 8px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: #3498db;
        }

        .content {
            margin-left: 240px;
            padding: 30px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ddd;
        }

        .card h3 {
            color: #555;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 25px;
            font-weight: bold;
            color: #3498db;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h2>KASIR MINIMARKET</h2>

    <a href="/dashboard">Dashboard</a>
    <a href="/barang">Data Barang</a>
    <a href="/kategori">Kategori</a>
    <a href="/kasir">Data Kasir</a>
    <a href="/transaksi">Transaksi</a>
    <a href="/laporan">Laporan Penjualan</a>
</div>

<div class="content">

    <h1>Dashboard</h1>
    <p>Selamat Datang di Aplikasi Kasir Minimarket</p>

    <div class="cards">

        <div class="card">
            <h3>Total Barang</h3>
            <p>0</p>
        </div>

        <div class="card">
            <h3>Total Kategori</h3>
            <p>0</p>
        </div>

        <div class="card">
            <h3>Total Transaksi</h3>
            <p>0</p>
        </div>

    </div>

</div>

</body>
</html>
