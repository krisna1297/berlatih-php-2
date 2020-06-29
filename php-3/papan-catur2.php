<?php

function papan_catur($angka) {
    // tulis kode di sini
    $baris = $angka + ($angka - 1);
    $kolom = $angka;
    $tiles = ['white', 'black']; // warna papan catur //
    echo '<table style="border:1px solid black" cellspacing="0" cellpadding="0">'.PHP_EOL;
    for($i = 1; $i <= $kolom; $i++) {
        echo '<tr>'.PHP_EOL;
        $tiles = array_reverse($tiles);
        for($j = 1; $j <= $baris; $j++) {
            echo '<td style="background-color: ';
            echo $j % 2 ? $tiles[0] : $tiles[1];
            echo '; width:2em;height:2em;">';
            echo '</td>'.PHP_EOL;
        }
        echo '</tr>'.PHP_EOL;
    }
    echo '</table><br>';
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