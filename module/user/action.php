<?php
    include_once("../../function/koneksi.php");
    include_once("../../function/helper.php");

    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    if($button == "Update"){
    $user_id = $_GET['user_id'];

    mysqli_query($koneksi,"UPDATE user SET nama_lengkap='$nama_lengkap',email='$email',level='$level',status='$status' Where user_id='$user_id'");
    }
    header("location:".BASE_URL."index.php?page=dashboard&module=user&action=list");
?>