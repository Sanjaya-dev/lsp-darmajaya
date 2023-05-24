<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'lsp_darmajaya';

    $koneksi = mysqli_connect($server,$user,$password,$database) or die("koneksi ke database gagal");
?>