<?php
// Pastikan variabel $halamanAktif memiliki nilai default agar tidak error jika lupa didefinisikan
$halamanAktif = $halamanAktif ?? 'beranda';

// Array menu navigasi
$menu = [
    "beranda" => ["judul" => "Beranda", "link" => "header.php"],
    "produk" => ["judul" => "Produk", "link" => "kategori.php"],
    "tentang" => ["judul" => "Tentang Kami", "link" => "tentang.php"] 
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulHalaman ?? 'Toko Darink' ?></title>
    <style>
        /* CSS sederhana agar menu aktif terlihat beda */
        nav ul { list-style-type: none; padding: 0; }
        nav ul li { display: inline; margin-right: 15px; }
        nav ul li a { text-decoration: none; color: blue; }
        nav ul li a.active { font-weight: bold; color: red; text-decoration: underline; }
        body { font-family: sans-serif; margin: 20px; }
    </style>
</head>
<body>

    <nav>
        <ul>
            <?php foreach ($menu as $kunci => $item): ?>
                <li>
                    <a href="<?= $item['link'] ?>" class="<?= ($halamanAktif == $kunci) ? 'active' : '' ?>">
                        <?= $item['judul'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <hr>