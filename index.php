<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #007bff;
            padding: 10px;
        }
        .navbar a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 10px 15px;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
        // Define menu items
        $menu = [
            "Beranda" => "index.php",
            "Profile" => "profile.php",
            "Kontak" => "kontak.php",
            "Keunggulan" => "keunggulan.php",
            "Perpustakaan" => "perpustakaan.php",
            "Pendaftaran" => "pendaftaran.php",
            "Informasi" => "informasi.php"
        ];
    ?>

    <nav class="navbar">
        <?php foreach ($menu as $name => $link): ?>
            <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
        <?php endforeach; ?>
    </nav>
</body>
</html>
