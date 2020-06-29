<?php
function pasangan_terbesar($angka){
    // kode di sini
    $string_angka = strval($angka);
    $c = strlen($string_angka) - 1;
    $pasangan = [];
    for($i = 0; $i < $c; $i++) {
        $pasangan[] = intval($string_angka[$i].$string_angka[$i+1]);
    }
    echo $angka . ' pasangan terbesar adalah ' . max($pasangan);
    echo '<br>';
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
