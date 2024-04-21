<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    // validasi nama
    if (empty($nama)) {
        $errors[] = "Nama Harus Diisi";
    }

    if (empty($email)) {
        $errors[] = "Email Harus Diisi";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format Email Tidak Valid";
    }

    // jika ada kesalahan validasi 
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<span style='color: red;'>$error</span><br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil 
        // misalnya, menyimpan data ke database atau mengirim email
        echo "Data Berhasil Dikirim: Nama = $nama, Email = $email";
    }
}
?>