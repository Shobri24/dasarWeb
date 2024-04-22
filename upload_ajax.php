<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array("jpg", "jpeg", "png");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "Extensi file yang diizinkan adalah JPG, JPEG, atau PNG.";
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file ' . $file_name . ' melebihi batas maksimum 2 MB';
            continue;
        }

        move_uploaded_file($tmp_name, "C:/laragon/www/dasarWeb/img/" . $file_name);
        echo "File " . $file_name . " berhasil diunggah.<br>";
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
