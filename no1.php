<?php
function checkForNumbers($text) {
   
    // $cleanText = filter_var($text, FILTER_SANITIZE_STRING);
    
    $karakter = str_split($text);
    
    $numbers = [];
    
    foreach ($karakter as $char) {
        if (ctype_digit($char)) {
            $numbers[] = $char;
        }
    }
      
    $numbers = array_unique($numbers);
    
   
    if (!empty($numbers)) {
        $numbersStr = implode(', ', $numbers);
        echo "Teks mengandung angka: $numbersStr";
    } else {
        echo "Teks tidak mengandung angka";
    }
}

$inputText = "mawwa 223";
checkForNumbers($inputText);
?>

<style>
    body {
        background-color: orange;
    }
</style>