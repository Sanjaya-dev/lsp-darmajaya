<?php
    include_once("function/helper.php");
    include_once("function/koneksi.php");

    $level = "pengguna";
    $status = "on";
    $nama_lengkap= $_POST["nama_lengkap"];
    $password = $_POST["password"];
    $re_password=$_POST["re_password"];
    $email = $_POST["email"];
    $npm = $_POST["npm"];
    $nomer_telphone = $_POST["nomer_telphone"];


    $dataForm = http_build_query($_POST);
    // pengecekan email di database
    $query = mysqli_query($koneksi,"SELECT * FROM user Where email='$email'");

    if(empty($nama_lengkap) || empty($email) || empty($nomer_telphone) || empty($password)){
        header("location:".BASE_URL."index.php?page=register&notif=requer&$dataForm");
    }elseif($password != $re_password){
        header("location:".BASE_URL."index.php?page=register&notif=password&$dataForm");        
    }elseif(mysqli_num_rows($query) == 1){
        header("location:".BASE_URL."index.php?page=register&notif=email&$dataForm");  
    }else{
        $password = md5($password);
        $ktm_file = $_FILES["ktm"]["name"];
        move_uploaded_file($_FILES["ktm"]["tmp_name"],"images/ktm/".$ktm_file);
        $query = mysqli_query($koneksi,"INSERT INTO user(level,nama_lengkap,email,nomer_telphone,npm,ktm,password,status) 
                                        VALUES('$level','$nama_lengkap','$email','$nomer_telphone','$npm','$ktm_file','$password','$status')");

        header("location:".BASE_URL."index.php?page=login");
    }
?>