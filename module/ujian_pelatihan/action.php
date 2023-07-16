<?php
    include_once("../../function/koneksi.php");
    include_once("../../function/helper.php");


    $nilai = $_POST['nilai'];
    $status_ujian = $_POST['status_ujian'];
    $button = $_POST['button'];

    if($button == "Update"){
    $ujian_id = $_GET['ujian_id'];

    mysqli_query($koneksi,"UPDATE ujian_pelatihan SET nilai='$nilai',status_ujian='$status_ujian' Where ujian_id='$ujian_id'");
    }
    header("location:".BASE_URL."index.php?page=dashboard&module=ujian_pelatihan&action=list");
?>