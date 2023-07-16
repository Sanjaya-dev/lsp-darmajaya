<div class="container">
    <div class="row">
        <div class="col">
            <?php
                $pelatihan_id = $_GET['pelatihan_id'];
                $query = mysqli_query($koneksi,"SELECT * FROM pelatihan Where pelatihan_id='$pelatihan_id' AND status='on'");
                $row = mysqli_fetch_assoc($query);
                echo "<div class='card' id='detail-barang'>
                        <h2>$row[nama_pelatihan]</h2>
                        <div id='frame-gambar'>
                            <img src='".BASE_URL."images/pelatihan/$row[gambar]'>
                        </div>
                        <div class='card-body'>
                            <div id='frame-harga'>
                                <span><b>Tanggal : $row[tanggal]</b></span><br/>
                                <span><b>Dosen : $row[dosen]</b></span><br/>";
                                if($user_id){
                                    echo "<a href='".BASE_URL."index.php?page=materi_pelatihan&pelatihan_id=$row[pelatihan_id]&user_id=$user_id'>Materi</a>";
                                }
                                echo "
                            </div>
                            <div id='keterangan'>
                                <b>keterangan</b>$row[deskripsi]
                            </div>
                        </div>
                    </div>";
            ?>
        </div>
    </div>
<div>
    
