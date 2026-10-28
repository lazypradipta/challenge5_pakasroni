<?php
// 1. Definisikan variabel untuk ditangkap oleh header.php
$judulHalaman = "Tentang Toko Darink";
$halamanAktif = "tentang";

// Panggil header
include 'header.php';

// 2. Data toko (Bisa dari database, tapi di sini kita pakai variabel manual)
$alamat = "Jl. Raya Kediri, Kec. Kediri, Kabupaten Tabanan, Bali";
$jamBuka = "Senin - Sabtu: 08:00 - 22:00 WITA";

// Array layanan
$daftarLayanan = [
    "Pemesanan Online via Web",
    "Pengiriman Cepat (Same Day Delivery)",
    "Bungkus Kado Custom",
    "Layanan Pelanggan 24/7"
];
?>

<main>
    <h1>Profil Toko</h1>
    <p><strong>Alamat:</strong> <?= $alamat ?></p>
    <p><strong>Jam Operasional:</strong> <?= $jamBuka ?></p>

    <h2>Layanan Kami</h2>
    <ul>
        <?php foreach ($daftarLayanan as $layanan): ?>
            <li><?= $layanan ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php 
// Panggil footer
include 'footer.php'; 
?>