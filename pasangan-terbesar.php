<?php
//pseudocode
//1. looping sebanyak karakter pada angka
//2. dapatkan pasangan angka pertama dengan metode substr
//3. pasangan angka pertama diset sebagai terbesar
//4. selama looping jika bertemu dgn angka yg lebih besar, terbesarnya di update
//5. return angka terbesar

function pasangan_terbesar($angka){
    $terbesar = substr($angka, 0, 2);
    for ($i = 0; $i <= strlen($angka)-2; $i++){
        $pasangan_angka = substr($angka, $i, 2);
        if ($pasangan_angka > $terbesar){
            $terbesar = $pasangan_angka;
        }
    }
 return $terbesar . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>