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
    
    $hasil_hitung_medali = [];
    $arr_negara = [];

    // init array negara  berdasarkan input
    $k = 0; // index array hasil
    foreach($arr_input as $row) {        
        $found = false;
        if(empty($hasil_hitung_medali)) {
            $hasil_hitung_medali[$k]['negara'] = $row[0];
            $hasil_hitung_medali[$k]['emas'] = 0;
            $hasil_hitung_medali[$k]['perak'] = 0;
            $hasil_hitung_medali[$k]['perunggu'] = 0;
            $k++;
        } 

        for($c = 0; $c < $k; $c++) {
            if($hasil_hitung_medali[$c]['negara'] == $row[0]) {
                $found = true;
                if($row[1] == 'emas') {
                    $hasil_hitung_medali[$c]['emas']++;
                    break;
                } else if($row[1] == 'perak') {
                    $hasil_hitung_medali[$c]['perak']++;
                    break;
                } else if($row[1] == 'perunggu') {
                    $hasil_hitung_medali[$c]['perunggu']++;
                    break;
                }
            }
        } 
        if(!$found) {
            $hasil_hitung_medali[$k]['negara'] = $row[0];
            if($row[1] == 'emas') {
                $hasil_hitung_medali[$k]['emas'] = 1;
            } else  {
                $hasil_hitung_medali[$k]['emas'] = 0;
            }
            if($row[1] == 'perak') {
                $hasil_hitung_medali[$k]['perak'] = 1;
            } else  {
                $hasil_hitung_medali[$k]['perak'] = 0;
            }
            if($row[1] == 'perunggu') {
                $hasil_hitung_medali[$k]['perunggu'] = 1;
            } else  {
                $hasil_hitung_medali[$k]['perunggu'] = 0;
            }
            $k++;
        }
    }

    return $hasil_hitung_medali;
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
        array('Indonesia', 'emas')
    )
));
echo '</pre>';

?>