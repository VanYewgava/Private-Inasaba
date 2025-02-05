<?php
$hewan = ["kucing","sapi","kambing","harimau","gajah"];

//menampilkan array menggunakan for
echo "<b>1. Menampilkan array menggunakan for</b><br>";
for ($i=0; $i < count($hewan) ; $i++) { 
    echo $hewan[$i]."<br>";
}

//menambahkan hewan
echo "<br><b>Menambahkan hewan dan menampilkan array menggunakan for</b><br>";
array_push ($hewan,"unta","jerapah","kuda","kangguru");
for ($i=0; $i < count($hewan) ; $i++) { 
    echo $hewan[$i]."<br>";
}

//nomor 2
echo "<br><b>2. Menampilkan array menggunakan foreach</b><br>";
$pc = ["monitor","mouse","keyboard","cpu"];
foreach ($pc as $pckentang){
    echo $pckentang."<br>";
}

echo "<br><b>Menambahkan perangkat dan menampilkan array menggunakan foreach</b><br>";
array_push ($pc,"kabel LAN","RJ45","Speaker","printer");
foreach ($pc as $pckentang){
    echo $pckentang."<br>";
}

//nomor 3
echo "<br><b>3. Menampilkan array multidimensi smartphone-RP.7000000</b><br>";
$toko =[
    ["Laptop",12000000],
    ["Smartphone",7000000],
    ["Tablet",1200000]
];

echo "Nama produk:" . $toko[1][0] . "- RP" . $toko[1][1]. "<br>";

//nomor 4
echo "<br><b>4. Menampilkan array menggunakan foreach</b><br>";
$kota = [
    ["Jakarta",10110],
    ["Surabaya",60111],
    ["Bandung",40112],
    ["Yogyakarta",55122]
];

foreach ($kota as $city){
    echo "Kota: $city[0] - Kode Pos: $city[1] <br>";
}
?>