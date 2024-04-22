<?php
//connect to db
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

//checking connection
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
