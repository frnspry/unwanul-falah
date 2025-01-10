<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS file -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- AOS -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    </head>

    <body>
        <header>
        <header class="header">
            <div class="logo">
                <img src="images/BlueHorizonWhite.png" alt="LogoResort" width="75%">
            </div>
            <button id="menu-btn" class="navbar-toggler">
                <i class="bi bi-list"></i> 
            </button>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php" style="text-decoration:none;">Beranda</a></li>
                    <li><a href="profile.php" style="text-decoration:none;">Profil</a></li>
                    <li><a href="#" style="text-decoration:none;">Keunggulan</a></li>
                    <li><a href="#" style="text-decoration:none;">Organisasi</a></li>
                    <li><a href="#" style="text-decoration:none;">Informasi</a></li>
                    <li><a href="#" style="text-decoration:none;">Perpustakaan</a></li>
                    <li><a href="#" style="text-decoration:none;">Pendaftaran</a></li>
                </ul>
            </nav>
        </header>
<script>
    // Menunggu hingga DOM sepenuhnya dimuat
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.getElementById('menu-btn');
        const navbar = document.querySelector('.navbar');

        // Event listener untuk toggle navbar
        menuBtn.addEventListener('click', function() {
            navbar.classList.toggle('active');
        });
    });
</script>
