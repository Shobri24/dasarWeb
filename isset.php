<?php
$umur;

if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}

$data = array("nama" => "Jane", "usia" => 25); // Perbaikan: tanda => digunakan untuk mendefinisikan pasangan kunci-nilai
if (isset($data["nama"])) {
    echo "Nama: ".$data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>
