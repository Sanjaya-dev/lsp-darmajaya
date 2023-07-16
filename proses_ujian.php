<?php
    include_once("function/koneksi.php");
    include_once("function/helper.php");


    $pelatihan_id = $_GET['pelatihan_id'];
    $user_id = $_GET['user_id'];
    $nilai = 0;
    $status = "sedang diperiksa admin";
    // $button = $_POST['button'];

    if(!empty($_FILES["file_jawaban_soal"]["name"])){
        $file_jawaban = $_FILES["file_jawaban_soal"]["name"];
        move_uploaded_file($_FILES["file_jawaban_soal"]["tmp_name"],"file/jawaban_ujian/".$file_jawaban);
 

        mysqli_query($koneksi,"INSERT INTO ujian_pelatihan(user_id,pelatihan_id,nilai,file_jawaban,status_ujian)
                    VALUES('$user_id','$pelatihan_id','$nilai','$file_jawaban','$status')");

                    
        header("location:".BASE_URL."index.php?page=dashboard");            
    }else{
        echo "anda harus mengirim file jawaban";
    }

    
    


?>