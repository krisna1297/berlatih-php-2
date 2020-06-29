<?php

function papan_catur($angka) {
    // tulis kode di sini
    $baris = $angka + ($angka - 1);
    $kolom = $angka;
    $tiles = ['&middot;', '#']; // warna papan catur //
    for($i = 1; $i <= $kolom; $i++) {
        $tiles = array_reverse($tiles);
        for($j = 1; $j <= $baris; $j++) {
            echo $j % 2 ? $tiles[0] : $tiles[1];
        }
        echo '<br>';
    }
    echo '<br><br>';
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/