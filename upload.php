<?php
if (isset($_POST["submit"])) {
    if (isset($_FILES["documentToUpload"])) {
        $targetDirectory = "C:/laragon/www/dasarWeb/img/"; // Direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
        $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxFileSize = 10 * 1024 * 1024; // 5 MB

        if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah";
            } else {
                echo "Gagal mengunggah dokumen.";
            }
        } else {
            echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
}
?>
