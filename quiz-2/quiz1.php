<?php

/*
// pseudo code 
1. Buat array operator perhitungan isinya *, :, +, -, %
2. Looping nilai operator kemudian ambil nilai operand kiri dan kanan serta operator perhitungannya 
   dari string data dengan menggunakan fungsi explode
3. Jika hasil explode > 1 maka string data dapat diekstrak menjadi nilai kiri, operatornya dan nilai kanan
4. Eksekusi nilai kiri dan nilai kanan dengan operator menggunakan conditioning berdasarkan nilai operator
*/

function hitung($string_data) {
    $operators = ['*', ':', '+', '-', '%'];
    $operasi = '';
    $kiri = 0; $kanan = 0;
    $hasil = '';

    foreach($operators as $operator) {
        $eksekusi = explode($operator, $string_data);
        if(count($eksekusi) > 1) {
            $operasi = $operator;
            $kiri = intval($eksekusi[0]);
            $kanan = intval($eksekusi[1]);
            break;
        }
    }
    switch($operasi) {
        case '*' :
            $hasil = $kiri * $kanan;
        break;
        case ':' :
            $hasil = $kiri / $kanan;
        break;
        case '+' :
            $hasil = $kiri + $kanan;
        break;
        case '-' :
            $hasil = $kiri - $kanan;
        break;
        case '%' :
            $hasil = $kiri % $kanan;
        break;

        default :
            $hasil = 'Operator perhitungan tidak valid!<br>';
        break;
    }
    echo $string_data . ' = ' . $hasil . '<br>';
}

echo hitung("102*2"); // 204
echo hitung("2+3"); // 5
echo hitung("100:25"); // 4
echo hitung("10%2"); // 0
echo hitung("99-2"); // 97
?>