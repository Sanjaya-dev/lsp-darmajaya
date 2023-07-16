
    <select class="form-select form-select-lg mb-3" id="menu_search" aria-label=".form-select-lg example" onchange="location = this.value;">
        <option selected>Pilih kategori pelatihan</option>
        <?php
            $query = mysqli_query($koneksi,"SELECT kategori_id, kategori FROM kategori WHERE status='on'");
            while($row = mysqli_fetch_assoc($query)){
                echo "<option value='".BASE_URL."index.php?page=search&kategori_id=$row[kategori_id]'>$row[kategori]</option>";
            }
        ?>
    </select>
    <div class="container text-center">
        <div class="row">
            <?php
                $kategori_id = isset($_GET['kategori_id'])? $_GET['kategori_id']:false;
                $query_pelatihan = mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE kategori_id='$kategori_id' AND status='on'");
                while($row = mysqli_fetch_assoc($query_pelatihan)){
                    echo "<div class='col-lg-4'>";
                        echo "<div class='card card_pelatihan' style='width: 18rem;'>
                            <a href='".BASE_URL."index.php?page=deskripsi&pelatihan_id=$row[pelatihan_id]'><img src='".BASE_URL."images/pelatihan/$row[gambar]' class='card-img-top' alt='$row[gambar]'>
                            <div class='card-body'>
                                <h5 class='card-title'>$row[nama_pelatihan]</h5>
                                <p class='card-text'>Tanggal : $row[tanggal]</p>
                                <p class='card-text'>Dosen : $row[dosen]</p>
                            </div>
                            </a>
                        </div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    