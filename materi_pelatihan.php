<?php
    $pelatihan_id = isset($_GET['pelatihan_id']) ? $_GET['pelatihan_id'] : false;
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : false;
    $query = mysqli_query ($koneksi,"SELECT * FROM pelatihan WHERE pelatihan_id='$pelatihan_id'");
    $row = mysqli_fetch_assoc($query);

?>
<script>
    function checkAll() {
        var checkboxes = document.getElementsByName('checkbox[]');
        var button = document.getElementById('submitBtn');
        var checkedCount = 0;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
            checkedCount++;
            }
        }
      
        if (checkedCount === checkboxes.length) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
</script>
<div class="container row">
            <?php
                if($pelatihan_id){
                    echo "<div class='col-lg-6'>";
                        echo "<div class='card card_pelatihan' style='width: 24rem;'>
                            <img src='".BASE_URL."images/pelatihan/$row[gambar]' class='card-img-top' alt='$row[gambar]'>
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
    <div class="col-lg-6">
        <!-- <form action="" method="">
            
        </form> -->
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   <b>Minggu 1</b>
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m1'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m1]' width='500' height='300'></iframe>";
                            }
                        ?>
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="1" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <b>Minggu 2</b>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m2'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m2]' width='800' height='400'></iframe>";
                            }
                        ?>    
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="2" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <b>Minggu 3</b>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m3'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m3]' width='800' height='400'></iframe>";
                            }
                        ?>  
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="3" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <b>Minggu 4</b>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m4'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m4]' width='800' height='400'></iframe>";
                            }
                        ?>  
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="4" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <b>Minggu 5</b>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m5'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m5]' width='800' height='400'></iframe>";
                            }
                        ?>  
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="5" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <b>Minggu 6</b>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m6'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m6]' width='800' height='400'></iframe>";
                            }
                        ?>  
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="6" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <b>Minggu 7</b>
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            if(empty($row['materi_m7'])){
                                echo "kosong";
                            }else{
                                echo "<iframe src='".BASE_URL."file/materi_pelatihan/$row[materi_m7]' width='800' height='400'></iframe>";
                            }
                        ?>  
                    </div>
                </div>
                <input type="checkbox" name="checkbox[]" value="7" onclick="checkAll()"> Ceklist jika materi sudah selesai di pelajari
            </div>
        </div>
        <br/>
        <button type="button" class="btn btn-primary" id="submitBtn" disabled><a class="btn btn-primary" href="<?php echo BASE_URL."ujian_sertifikasi.php?pelatihan_id=$pelatihan_id&user_id=$user_id";?>" disabled>Ujian Sertifikasi</a></button>
    </div>
</div>