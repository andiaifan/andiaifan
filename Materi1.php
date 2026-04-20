<?php
echo "<br>HELLO GUYS SELAMAT DATANG DIKELASNYA andi aifan almagshiran <br>";

    $nama = "Andi aifan";
    $umur = "20";
    $tinggi = "165";
    $kelas = "TIB Semester 4";

    echo "<br>Nama saya $nama, <br>umur saya $umur, <br>tinggi saya $tinggi, <br>kelas saya $kelas";

echo "<br><br>========================<br>";
$nilai1 = 12;
$nilai2 = 12;
$nilai3 = 2;

$hasil = $nilai1 * $nilai2 - $nilai3;
echo "<br>hasil dari $nilai1 x $nilai2 - $nilai3 adalah $hasil";

if($hasil >= 100) {
    echo "<br>nilai anda lebih dari 100";
} else if($hasil <= 100){
    echo "<br>nilai anda kurang dari 100";
} else {
    echo "<br>nilai anda kosong";
}
if($hasil >= 100) {
    echo "<br>Nilai anda ganjil";
} else if ($hasil < 120) {
    echo "<br>Nilai anda genap";
}
echo "<br><br>=============================================================";
    
if($hasil % 2 == 0){
        echo "<br>$hasil adalah bilangan GENAP";
    } else {
        echo "<br>$hasil adalah bilangan GANJIL";
    }

?>