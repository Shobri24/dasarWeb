<?php
$hargaProduk = 120000;
$batasDiskon = 100000;
$diskonPersen = 20;
if ($hargaProduk > $batasDiskon) {
    $diskon = $hargaProduk * ($diskonPersen / 100);
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
        $hargaSetelahDiskon = $hargaProduk;
}
echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
?>
