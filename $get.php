<?php
$nama = isset($_GET['nama']) ? $_GET['nama'] : ''; // Menggunakan isset() untuk memeriksa apakah key 'nama' tersedia, jika tidak, variabel $nama akan diisi dengan string kosong.
$usia = isset($_GET['usia']) ? $_GET['usia'] : ''; // Menggunakan isset() untuk memeriksa apakah key 'usia' tersedia, jika tidak, variabel $usia akan diisi dengan string kosong.
echo "Halo {$nama}! Apakah benar Anda berusia {$usia} tahun?";
