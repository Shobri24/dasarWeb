<?php
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKursiKosong = ($kursiKosong / $totalKursi) * 100;
echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persenKursiKosong, 2) . "%";
?>
