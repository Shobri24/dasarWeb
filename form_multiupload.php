<!DOCTYPE html>
<html>

<head>
    <title>Multiupload Gambar</title>
</head>

<body>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept="image/jpeg, image/png" />
        <input type="submit" value="Unggah" />
    </form>
</body>

</html>
