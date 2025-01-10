<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Scroll Example</title>
    <style>
        .container {
            height: 100vh; /* Menetapkan tinggi container agar memenuhi layar */
            background-image: url('assets/img/elgato1.png'); /* Ganti dengan URL gambar Anda */
            background-size: cover; /* Menyesuaikan ukuran gambar dengan ukuran container */
            background-position: center; /* Menempatkan gambar di tengah container */
            background-attachment: fixed; /* Gambar latar belakang tetap saat di-scroll */
        }

        .content {
            height: 2000px; /* Memberikan konten panjang untuk memungkinkan scrolling */
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Scroll Down to See the Effect</h1>
            <p>Gambar latar belakang akan tetap di posisi saat Anda scroll.</p>
        </div>
    </div>
</body>
</html>
