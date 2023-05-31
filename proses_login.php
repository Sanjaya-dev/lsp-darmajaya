<?php 
    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");
    

    // mengecek data,myqli_num_rows = menjumlah baris database sesuai permintaan.
    if(mysqli_num_rows($query) == 0){
        header("location:".BASE_URL."index.php?page=login&notif=true");
    }else{
        //mengambil baris data yang dipilih di database dengan mengubahnya menjadi array.
        $row = mysqli_fetch_assoc($query);

        session_start();

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        $_SESSION['level'] = $row['level'];

        header("location:".BASE_URL);
    }
?>