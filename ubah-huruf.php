<?php
function ubah_huruf($string){
//kode di sini
//pseudocode
//1.buat manual perpustakaan alpabet
//2. looping perkarakter pada parameter string
//3. tampung ke variabel penampung: karakter pada posisi $i+1 di abjadnya
//4. return penampung
$alpabet = "abcdefghijklmnopqrstuvwxyz";
$hasil = "";
for ($i = 0; $i < strlen($string); $i++){
    $posisi = strrpos($alpabet, $string[$i]);
    $hasil .= substr($alpabet, $posisi+1, 1);
}
return $hasil . "<br>";

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
