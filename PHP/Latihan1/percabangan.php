<?php
// if (10 < 5) {
//     echo "Ya benar";
// }elseif (10 > 20) {
//     echo "Benar";
// }
// else{
//     echo "Salah";
// }

// $x = 67;

// if ($x >= 91 && $x <= 100) {
//     echo "Nilai Anda adalah $x Grade Anda adalah A+";
// }
// elseif ($x >= 81 && $x <= 90) {
//     echo "Nilai Anda adalah $x Grade Anda adalah A";
// }
// elseif ($x >= 71 && $x <= 80) {
//     echo "Nilai Anda adalah $x Grade Anda adalah B";
// }
// elseif ($x >= 61 && $x <= 70) {
//     echo "Nilai Anda adalah $x Grade Anda adalah C";
// }
// elseif ($x >= 51 && $x <= 60) {
//     echo "Nilai Anda adalah $x Grade Anda adalah D";
// }
// elseif ($x >= 41 && $x <= 50) {
//     echo "Nilai Anda adalah $x Grade Anda adalah E";
// }
// else {
//     echo "Nilai yang Anda masukan tidak sesuai";
// }
// $x = 18;
// if ($x <= 12) {
//     echo "Usia $x tahun masuk ke kategori Anak-anak";
// }
// elseif ($x <= 18) {
//     echo "Usia $x tahun masuk ke kategori Remaja";
// }
// elseif ($x <= 60) {
//     echo "Usia $x tahun masuk ke kategori Dewasa";
// }
// else {
//     echo "Usia $x tahun masuk ke kategori Lansia";
// }

// $x = 21;
// if ($x % 2 == 0) {
//     echo "Bilangan $x merupakan bilangan genap";
// }
// else {
//     echo "Bilangan $x merupakan bilangan ganjil";
// }

// for ($i=1; $i <= 10 ; $i++) { 
//     if ($i % 2 == 0) {
//         echo " $i Bilangan Genap <br>";
//     }else {
//         echo " $i Bilangan Ganjil <br>";
//     }
    
// }

for ($i=20; $i <= 35 ; $i++) { 
    if ($i % 2 == 0) {
        echo $i . " Ivan <br>";
    } elseif ($i % 3 == 0) {
        echo $i . " Ivan Yugava<br>";
    } elseif ($i % 2 != 0 || $i % 3 != 0) {
        echo $i . " Inasaba <br>";
    }
}
?>