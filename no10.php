<?php
function cekJawaban($nama_siswa, $jawaban_siswa, $jawaban_benar) {
    // variabel jawaban benar dan salah
    $jawaban_benar_count = 0;
    $jawaban_salah_count = 0;
    
    // Hitung jumlah jawaban benar dan salah
    foreach ($jawaban_siswa as $index => $jawaban) {
        // mengecek apakah variabel tidak kosong (null)
        if (isset($jawaban_benar[$index])) {
            if ($jawaban === $jawaban_benar[$index]) {
                $jawaban_benar_count++;
            } else {
                $jawaban_salah_count++;
            }
        }
    }

    // Tampilkan hasil
    echo "Nama : <b>$nama_siswa</b><br>";
    echo "Jumlah Jawaban Benar = <b>$jawaban_benar_count</b><br>";
    echo "Jumlah Jawaban Salah = <b>$jawaban_salah_count</b><br>";
}

// Data jawaban dan nama
$jawaban_benar = ['A','D','C','C','B','A','E','B','A','E'];
$nama_siswa = 'Putri';
$jawaban_siswa = ['A','D','B','C','D','A','E','B','C','B'];

cekJawaban($nama_siswa, $jawaban_siswa, $jawaban_benar);
?>