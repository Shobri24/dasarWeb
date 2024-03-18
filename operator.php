<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a + $b adalah $hasilTambah <br>";
echo "Hasil pengurangan $a - $b adalah $hasilKurang <br>";
echo "Hasil perkalian $a * $b adalah $hasilKali <br>";
echo "Hasil pembagian $a / $b adalah $hasilBagi <br>";
echo "Sisa pembagian $a % $b adalah $sisaBagi <br>";
echo "Hasil pangkat $a ** $b adalah $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah $a sama dengan $b? $hasilSama <br>";
echo "Apakah $a tidak sama dengan $b? $hasilTidakSama <br>";
echo "Apakah $a lebih kecil dari $b? $hasilLebihKecil <br>";
echo "Apakah $a lebih besar dari $b? $hasilLebihBesar <br>";
echo "Apakah $a lebih kecil atau sama dengan $b? $hasilLebihKecilSama <br>";
echo "Apakah $a lebih besar atau sama dengan $b? $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil dari operasi $a && $b: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil dari operasi $a || $b: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil dari operasi !$a: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil dari operasi !$b: " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
echo "Nilai a setelah ditambah dengan b: $a <br>";
$a -= $b;
echo "Nilai a setelah dikurangi dengan b: $a <br>";
$a *= $b;
echo "Nilai a setelah dikali dengan b: $a <br>";
$a /= $b;
echo "Nilai a setelah dibagi dengan b: $a <br>";
$a %= $b;
echo "Sisa pembagian a dengan b: $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah $a identik dengan $b? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah $a tidak identik dengan $b? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

?>
