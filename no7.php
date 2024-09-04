<?php
function hitung($kata1, $kata2) {
    $kal1 = strlen($kata1);
    $kal2 = strlen($kata2);
    $selisih = $kal1 - $kal2;
    
    return $selisih;
}

$kata1 = "mujairr";
$kata2 = "marvel";

$selisihKarakter = hitung($kata1, $kata2);
echo "Selisih jumlah karakter antara '$kata1' dan '$kata2' adalah $selisihKarakter.";
?>