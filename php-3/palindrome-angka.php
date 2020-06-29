<?php

function do_palindrome_angka($angka) {
    $angka++;
    while($angka != intval(strrev(strval($angka)))) {
        $angka++; 
    }
    return $angka;
}

function palindrome_angka($angka) {
    // tulis kode di sini
    $title = 'Palindrome angka ';
    echo $title . $angka . ' adalah ' . do_palindrome_angka($angka) . '<br>';
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
?>