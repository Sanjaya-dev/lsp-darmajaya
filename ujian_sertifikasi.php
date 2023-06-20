<?php
    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $pelatihan_id = isset($_GET['pelatihan_id']) ? $_GET['pelatihan_id']:false;
    $user_id = isset($_GET['user_id']) ? $_GET['user_id']:false;
    // $query = mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE pelatihan_id='$pelatihan_id'");
    // $row = mysqli_fetch_assoc($query);

    if($pelatihan_id){
        $query = mysqli_query($koneksi,"SELECT * FROM pelatihan Where pelatihan_id='$pelatihan_id'");
        $row = mysqli_fetch_assoc($query);
        $nama_pelatihan = $row['nama_pelatihan'];
        $file_ujian = $row['file_ujian'];
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Ujian Sertifikasi Profesi Darmajaya</title>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <form action="<?php echo BASE_URL."proses_ujian.php?pelatihan_id=$pelatihan_id&user_id=$user_id"?>" method="POST" enctype="multipart/form-data">
                    <div class="card" style="width: 45rem; margin-top: 20px;">
                        <iframe src="<?php echo BASE_URL."file/soal_ujian/$row[file_ujian]"; ?>" width='700' height='400'></iframe>
                        <div class="card-body">
                            <?php
                                echo"<h5 class='card-title'>$nama_pelatihan</h5>";
                                echo"<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
                            ?>
                            <input type="file" class="form-control input_gambar" name="file_jawaban_soal"/>
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Kirim</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>