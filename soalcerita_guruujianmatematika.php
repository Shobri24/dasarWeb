<?php
$daftarNilai = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

$rataRata = array_sum($daftarNilai) / count($daftarNilai);

echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas:<br>";
foreach ($daftarNilai as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}
?>
