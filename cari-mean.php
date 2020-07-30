<?php

function cari_mean($arr){
    $sum = array_sum($arr);
    $mean = round ($sum /= count($arr));
    $tambah = implode (" + ",$arr);
    echo  "($tambah) memiliki mean sebesar $mean<br>" ;
//kode di sini
}


echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>