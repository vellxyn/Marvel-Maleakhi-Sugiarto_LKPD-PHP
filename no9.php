<?php
function cariJenisKoin($jumlah_uang) {
    $denominasi = [1000, 500, 200, 100];
    
    // menyimpan hasil koin yang digunakan
    $hasil_koin = [];

    // Looping setiap koin yang dimasukkan
    foreach ($denominasi as $koin) {
        // Menghitung jumlah koin 
        if ($jumlah_uang >= $koin) {
            // intdiv = dividend (yang akan dibagi) dan divisor 
            $jumlah_koin = intdiv($jumlah_uang, $koin);
            // Jika koin ada akan menambahkan ke dalam hasil
            for ($i = 0; $i < $jumlah_koin; $i++) {
                $hasil_koin[] = $koin;
            }
            // mengurangi jumlah uang yg tersisa
            $jumlah_uang = $jumlah_uang % $koin;
        }
    }
    
    // mengembalikan value ke $hasil_koin
    return $hasil_koin;
}

$jumlah_uang = 1750;
$jenis_koin = cariJenisKoin($jumlah_uang);

// Output 
echo "Jenis Koin untuk Uang Rp. " . number_format($jumlah_uang, 0, ',', '.') . " :<br>";

foreach ($jenis_koin as $koin) {
    echo "<li>Rp. " . number_format($koin, 0, ',', '.') . "</li>";
}
?>