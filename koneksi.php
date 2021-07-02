<?php
    $host = "us-cdbr-east-04.cleardb.com";
    $username = "b4859a310bf81d";
    $password = "59c8f505";
    $database = "heroku_3ea3c8ac277ce05";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if(!$koneksi){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
