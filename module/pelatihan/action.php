<?php
    include_once("../../function/koneksi.php");
    include_once("../../function/helper.php");

    
    $kategori_id = $_POST['kategori_id'];
    $nama_pelatihan = $_POST['nama_pelatihan'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $dosen = $_POST['dosen'];
    // $materi_m1 = $_POST['materi_m1'];
    // $materi_m2 = $_POST['materi_m2'];
    // $materi_m3 = $_POST['materi_m3'];
    // $materi_m4 = $_POST['materi_m4'];
    // $materi_m5 = $_POST['materi_m5'];
    // $materi_m6 = $_POST['materi_m6'];
    // $materi_m7 = $_POST['materi_m7'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $update_gambar = '';
    $update_materi_m1 = '';
    $update_materi_m2 = '';
    $update_materi_m3 = '';
    $update_materi_m4 = '';
    $update_materi_m5 = '';
    $update_materi_m6 = '';
    $update_materi_m7 = '';

    // proses upload dan update file
    if(!empty($_FILES["file"]["name"])){
        $name_file = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/pelatihan/".$name_file);

        $update_gambar = ",gambar='$name_file'";
    }elseif(!empty($_FILES["materi_m1"]["name"])){
        $materi_m1_file = $_FILES["materi_m1"]["name"];
        move_uploaded_file($_FILES["materi_m1"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m1_file);

        $update_materi_m1 = ",materi_m1='$materi_m1_file'";
    }elseif(!empty($_FILES["materi_m2"]["name"])){
        $materi_m2_file = $_FILES["materi_m2"]["name"];
        move_uploaded_file($_FILES["materi_m2"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m2_file);

        $update_materi_m2 = ",materi_m2='$materi_m2_file'";
    }elseif(!empty($_FILES["materi_m3"]["name"])){
        $materi_m3_file = $_FILES["materi_m3"]["name"];
        move_uploaded_file($_FILES["materi_m3"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m3_file);

        $update_materi_m3 = ",materi_m3='$materi_m3_file'";
    }elseif(!empty($_FILES["materi_m4"]["name"])){
        $materi_m4_file = $_FILES["materi_m4"]["name"];
        move_uploaded_file($_FILES["materi_m4"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m4_file);

        $update_materi_m4 = ",materi_m4='$materi_m4_file'";
    }elseif(!empty($_FILES["materi_m5"]["name"])){
        $materi_m5_file = $_FILES["materi_m5"]["name"];
        move_uploaded_file($_FILES["materi_m5"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m5_file);

        $update_materi_m5 = ",materi_m5='$materi_m5_file'";
    }elseif(!empty($_FILES["materi_m6"]["name"])){
        $materi_m6_file = $_FILES["materi_m6"]["name"];
        move_uploaded_file($_FILES["materi_m6"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m6_file);

        $update_materi_m6 = ",materi_m6='$materi_m6_file'";
    }elseif(!empty($_FILES["materi_m7"]["name"])){
        $materi_m7_file = $_FILES["materi_m7"]["name"];
        move_uploaded_file($_FILES["materi_m7"]["tmp_name"],"../../file/materi_pelatihan/".$materi_m7_file);

        $update_materi_m7 = ",materi_m7='$materi_m7_file'";
    }

    // input dan update ke database
    if($button == "Add"){
        mysqli_query($koneksi,"INSERT INTO pelatihan (kategori_id,nama_pelatihan,gambar,deskripsi,tanggal,dosen,materi_m1,materi_m2,materi_m3,materi_m4,materi_m5,materi_m6,materi_m7,status) 
                    VALUES ('$kategori_id','$nama_pelatihan','$name_file','$deskripsi','$tanggal','$dosen','$materi_m1_file','$materi_m2_file','$materi_m3_file','$materi_m4_file','$materi_m5_file','$materi_m6_file','$materi_m7_file','$status')");
          
    }elseif($button == "Update"){
        $pelatihan_id = $_GET['pelatihan_id'];

        mysqli_query($koneksi,"UPDATE pelatihan SET kategori_id='$kategori_id', 
                                                    nama_pelatihan='$nama_pelatihan',
                                                    deskripsi='$deskripsi',
                                                    tanggal='$tanggal',
                                                    dosen='$dosen',
                                                    status='$status'
                                                    $update_gambar 
                                                    $update_materi_m1
                                                    $update_materi_m2
                                                    $update_materi_m3
                                                    $update_materi_m4
                                                    $update_materi_m5
                                                    $update_materi_m6
                                                    $update_materi_m7 WHERE pelatihan_id='$pelatihan_id'");
    }
    header("location:".BASE_URL."index.php?page=dashboard&module=pelatihan&action=list");
?>