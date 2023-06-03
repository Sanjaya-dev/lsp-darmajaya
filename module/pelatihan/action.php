<?php
    include_once("../../function/koneksi.php");
    include_once("../../function/helper.php");

    
    $kategori_id = $_POST['kategori_id'];
    $nama_pelatihan = $_POST['nama_pelatihan'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $dosen = $_POST['dosen'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $update_gambar = '';

    if(!empty($_FILES["file"]["name"])){
        $name_file = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/pelatihan/".$name_file);

        $update_gambar = ",gambar='$name_file'";
    }

    if($button == "Add"){
        mysqli_query($koneksi,"INSERT INTO pelatihan (kategori_id,nama_pelatihan,gambar,deskripsi,tanggal,dosen,status) 
                    VALUES ('$kategori_id','$nama_pelatihan','$name_file','$deskripsi','$tanggal','$dosen','$status')");
          
    }elseif($button == "Update"){
        $pelatihan_id = $_GET['pelatihan_id'];

        mysqli_query($koneksi,"UPDATE pelatihan SET kategori_id='$kategori_id', 
                                                    nama_pelatihan='$nama_pelatihan',
                                                    deskripsi='$deskripsi',
                                                    tanggal='$tanggal',
                                                    dosen='$dosen',
                                                    status='$status'
                                                    $update_gambar WHERE pelatihan_id='$pelatihan_id'");
    }
    header("location:".BASE_URL."index.php?page=dashboard&module=pelatihan&action=list");
?>