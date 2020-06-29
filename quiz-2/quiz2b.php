<?php

/*
// algoritma //
1. Cek apakah array input kosong, jika kosong return string no data
2. Buat array kosong hasil hitung dan current indexnya $k = 0
3. Loop array input, inisialisasi flag pencarian $found = false
4. Jika array hasil index negara kosong maka buat array hasil index negara dengan jumlah medali kosong semua dan tambahkan $k
5. Loop array hasil, cocokkan antara row input array dengan hasil negara, jika cocok flag $found jadi true dan update jumlah medali sesuai nama medalinya
6. Jika tidak ada negaranya ($found = false) buat index baru negara di array hasil dan update jumlah medalinya dan increment $k++
*/

function perolehan_medali($arr_input) {
    if(empty($arr_input)) {
        return 'No Data<br>';
    }

    $arr_medali = $arr_result = [];
    
    foreach($arr_input as list($negara, $medali)) {
        if(!isset($arr_medali[$negara])) {
            $arr_medali[$negara] = [
                'emas' => 0, 'perak' => 0, 'perunggu' => 0
            ];
        }
        $arr_medali[$negara][$medali]++;
    }

    // flatten the array sesuai output quiz

    foreach($arr_medali as $negara => $medali) {
        $arr_result[] = [
            'negara' => $negara,
            'emas' => $medali['emas'],
            'perak' => $medali['perak'],
            'perunggu' => $medali['perunggu']
        ];
    }
    /*
    return array_map(function($negara, $medali) {
        return array_merge(['negara' => $negara], $medali);
    }, array_keys($arr_medali), array_values($arr_medali));
    */

    return $arr_result;
}

echo '<pre>';
print_r(perolehan_medali(
    array(
        array('Indonesia', 'emas'),
        array('India', 'perak'),
        array('Korea Selatan', 'emas'),
        array('India', 'perak'),
        array('India', 'emas'),
        array('Indonesia', 'perak'),
        array('Indonesia', 'emas'),
        array('Korea Selatan', 'perunggu')
    )
));
echo '</pre>';

?>