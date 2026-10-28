<?php
$judulHalaman = "Kategori Produk";
$halamanAktif = "produk"; // Akan membuat menu "Produk" menjadi warna merah (aktif)

include 'header.php';

// Data produk
$produk = [
    ["nama" => "Kopi Susu", "kategori" => "Minuman"],
    ["nama" => "Teh Manis", "kategori" => "Minuman"],
    ["nama" => "Anyaman Bambu", "kategori" => "Kerajinan"],
    ["nama" => "Ukiran Kayu", "kategori" => "Kerajinan"],
    ["nama" => "Pie Susu", "kategori" => "Makanan"],
    ["nama" => "Kacang Disco", "kategori" => "Makanan"]
];

$jumlahPerKategori = [];

// Menghitung jumlah per kategori
foreach ($produk as $item) {
    $kategori = $item["kategori"];
    $jumlahPerKategori[$kategori] = ($jumlahPerKategori[$kategori] ?? 0) + 1;
}
?>

<main>
    <h1>Rekap Kategori Produk</h1>
    
    <p>
        <?php
        $hasilOutput = [];
        foreach ($jumlahPerKategori as $namaKategori => $jumlah) {
            $hasilOutput[] = "$namaKategori ($jumlah)";
        }
        
        // Cetak hasilnya
        echo implode(" &middot; ", $hasilOutput);
        ?>
    </p>
</main>

<?php 
include 'footer.php'; 
?>