<?php
function skor_terbesar($arr) {
    //kode di sini
    $arr_kelas = [];
    foreach($arr as $row) {
        // buat array assoc kelas jika belum ada, untuk menampung hasil //
        // kemudian set nilai = 0 untuk nanti dibandingkan dengan data skor //
        if(!isset($arr_kelas[$row['kelas']])) {
            $arr_kelas[$row['kelas']] = [
                'nilai' => 0
            ];
        }
        if($row['nilai'] > $arr_kelas[$row['kelas']]['nilai']) {
            // update nilai tertinggi //
            $arr_kelas[$row['kelas']] = $row;
        }
    }

    return $arr_kelas;
}

// TEST CASES
$skor = [
    [
      "nama" => "Bobby",
      "kelas" => "Laravel",
      "nilai" => 78
    ],
    [
      "nama" => "Regi",
      "kelas" => "React Native",
      "nilai" => 86
    ],
    [
      "nama" => "Aghnat",
      "kelas" => "Laravel",
      "nilai" => 90
    ],
    [
      "nama" => "Indra",
      "kelas" => "React JS",
      "nilai" => 85
    ],
    [
      "nama" => "Yoga",
      "kelas" => "React Native",
      "nilai" => 77
    ],
  ];
  
  echo '<pre>'.print_r(skor_terbesar($skor), 1).'</pre>';
  /* OUTPUT
    Array (
      [Laravel] => Array
                (
                  [nama] => Aghnat
                  [kelas] => Laravel
                  [nilai] => 90
                )
      [React Native] => Array
                    (
                      [nama] => Regi
                      [kelas] => React Native
                      [nilai] => 86
                    )
      [React JS] => Array
                  (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                  )
    )
  */
  ?>
  