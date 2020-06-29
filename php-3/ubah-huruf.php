<?php
function ubah_huruf($string){
    //kode di sini
    $alfabet = 'abcdefghijklmnopqrstuvwxyz';
    $hasil = '';
    for($i = 0; $i < strlen($string); $i++) {
        $index = strpos($alfabet, $string[$i]);
        $string[$i] == 'z' ? $index = 0 : $index++; // asumsi : jika posisi z maka menunjuk ke index a 
        $hasil .= $alfabet[$index];
    }
    echo $string . ' : ' . $hasil.'<br>';
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
?>