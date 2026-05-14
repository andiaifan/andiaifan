<?php

function salam ()
{
    echo"asalamualaikum" ;
}

salam();

function tambah(int $a, int $b)
{
    $jumlah = $a + $b;
    echo $jumlah;
}
tambah(4,6);

function kali(int $a, int $b)
{
    $jumlah =$a * $b;
    echo $jumlah;
}

function bagi(int $a, int $b)
{
    $jumlah =$a / $b;
    echo $jumlah;
}

function kurang(int $a, int $b)
{
    $jumlah =$a - $b;
    echo $jumlah;
}
?>


<form method="POST">
    <input type= "number" name="angka1">
    <input type= "number" name="angka2">
    <button type= "submit" name="kirim">Kirim</button>
</form>


<?php

if (isset($_POST['kirim'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    tambah($angka1, $angka2);
    echo "<br><br>";
    kali($angka1, $angka2);
    echo "<br><br>";
    bagi($angka1, $angka2);
    echo "<br><br>";
    kurang($angka1, $angka2);


}

?>
