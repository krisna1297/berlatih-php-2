<?php
function tukar_besar_kecil($string){
    //kode di sini
    $lower = ' abcdefghijklmnopqrstuvwxyz';
    $upper = strtoupper($lower);
    $index = null; $hasil = '';
    
    for($i = 0; $i < strlen($string); $i++) {
        if($index = strpos($lower, $string[$i])) {
            // huruf kecil ubah ke huruf besar
            $hasil .= $upper[$index];
        } else if($index = strpos($upper, $string[$i])) {
            // huruf besar ubah ke huruf kecil
            $hasil .= $lower[$index];
        } else {
            // selain huruf tampilkan apa adanya
            $hasil .= $string[$i];
        }
    }

    // atau pake logika XOR : $tukeran = strtolower($string) ^ strtoupper($string) ^ $string;
    echo $string.' : '.$hasil.'<br>';
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
