<?php
    $ujian_id = isset($_GET['ujian_id']) ? $_GET['ujian_id']:false;

    // $kategori = "";
    // $nilai_ujian = "";
    // $button = "Add";

    if($ujian_id){
        $query = mysqli_query($koneksi,"SELECT * FROM ujian_pelatihan,user,pelatihan 
                            WHERE ujian_pelatihan.user_id = user.user_id AND ujian_pelatihan.pelatihan_id = pelatihan.pelatihan_id AND ujian_pelatihan.ujian_id = '$ujian_id'");
        $row = mysqli_fetch_assoc($query);
        $nama_lengkap = $row['nama_lengkap'];
        $npm = $row['npm'];
        $nama_pelatihan = $row['nama_pelatihan'];
        $nilai_ujian = $row['nilai'];
        $file_jawaban = $row['file_jawaban'];
        $status_ujian = $row['status_ujian'];
        $button = 'Update';
    }





?>
<form action="<?php echo BASE_URL."module/ujian_pelatihan/action.php?ujian_id=$ujian_id"; ?>" method="POST">
    <fieldset disabled>
        <div class="mb-3 elemet_form">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>"/>
        </div>
        <div class="mb-3 elemet_form">
            <label class="form-label">Npm</label>
            <input type="text" class="form-control" name="npm" value="<?php echo $npm; ?>"/>
        </div>
        <div class="mb-3 elemet_form">
            <label class="form-label">Nama Pelatihan</label>
            <input type="text" class="form-control" name="nama_pelatihan" value="<?php echo $nama_pelatihan; ?>"/>
        </div>
    </fieldset>
    <div class="mb-3 element_form">
        <iframe src="<?php echo BASE_URL."file/jawaban_ujian/$file_jawaban"; ?>" width='700' height='400'></iframe>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Nilai Ujian</label>
        <input type="text" class="form-control" name="nilai" value="<?php echo $nilai_ujian; ?>"/>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Status</label>
            <span class="element_status">
                <input type="radio" name="status_ujian" value="sedang diperiksa admin" <?php if($status_ujian == "sedang diperiksa admin"){echo "checked='true'";} ?> /> sedang diperiksa
                <input type="radio" name="status_ujian" value="maaf anda belum lulus" <?php if($status_ujian == "maaf anda belum lulus"){echo "checked='true'";} ?> /> Gagal
                <input type="radio" name="status_ujian" value="selamat anda lulus" <?php if($status_ujian == "selamat anda lulus"){echo "checked='true'";} ?> /> Lulus
            </span>
        </div>
    <button type="submit" class="btn btn-primary" name="button" value="<?php echo $button;?>"><?php echo $button;?></button>
</form>