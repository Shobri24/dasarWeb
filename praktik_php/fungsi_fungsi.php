<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    // memanggil fungsi hitungUmur
    echo "Saya berusia " . hitungUmur(2004, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi perkenalan
perkenalan("Elok");
?>
