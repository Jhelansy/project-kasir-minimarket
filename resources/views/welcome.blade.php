
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir Minimarket</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="welcome-body">

    <div class="welcome-container">

        <div class="welcome-logo">
            🛒
        </div>

        <h1>KASIR MINIMARKET</h1>

        <h3>Selamat Datang!</h3>

        <p>
            Aplikasi kasir minimarket untuk membantu
            mengelola barang, kategori, dan penjualan
            dengan mudah dan praktis.
        </p>

        <a href="{{ url('/dashboard') }}" class="welcome-button">
            MULAI SEKARANG →
        </a>

        <div class="welcome-footer">
            Sistem Informasi Kasir Minimarket
        </div>

    </div>

</body>
</html>
