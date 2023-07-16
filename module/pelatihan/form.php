<?php
    $pelatihan_id = isset($_GET['pelatihan_id']) ? $_GET['pelatihan_id']:false;

    $kategori_id = "";
    $nama_pelatihan = "";
    $deskripsi = "";
    $gambar = "";
    $file_ujian = "";
    $tanggal = "";
    $dosen = "";
    $link_sertifikat = "";
    $materi_m1 = "";
    $materi_m2 = "";
    $materi_m3 = "";
    $materi_m4 = "";
    $materi_m5 = "";
    $materi_m6 = "";
    $materi_m7 = "";
    $status = "";
    $button = "Add";

    if($pelatihan_id){
        $query = mysqli_query($koneksi,"SELECT * FROM pelatihan Where pelatihan_id='$pelatihan_id'");
        $row = mysqli_fetch_assoc($query);
        $nama_pelatihan = $row['nama_pelatihan'];
        $kategori_id = $row['kategori_id'];
        $gambar = $row['gambar'];
        $file_ujian = $row['file_ujian'];
        $status = $row['status'];
        $tanggal = $row['tanggal'];
        $deskripsi = $row['deskripsi'];
        $dosen = $row['dosen'];
        $link_sertifikat = $row['link_sertifikat'];
        $materi_m1 = $row['materi_m1'];
        $materi_m2 = $row['materi_m2'];
        $materi_m3 = $row['materi_m3'];
        $materi_m4 = $row['materi_m4'];
        $materi_m5 = $row['materi_m5'];
        $materi_m6 = $row['materi_m6'];
        $materi_m7 = $row['materi_m7'];

        $button = 'Update';

        $gambar = "<img src='".BASE_URL."images/pelatihan/$gambar' style='width: 200px;vertical-align: middle;' />";
    }





?>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<form action="<?php echo BASE_URL."module/pelatihan/action.php?pelatihan_id=$pelatihan_id"; ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3 elemet_form">
        <label class="form-label">Kategori</label>
        <select class="form-control" name="kategori_id">
            <?php
                $query = mysqli_query($koneksi,"SELECT kategori_id,kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
                while($row=mysqli_fetch_assoc($query)){
                    if($kategori_id == $row['kategori_id'] ){
                        echo "<option value='$row[kategori_id]' selected='true'>$row[kategori]</option>";
                    }else{
                        echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Pelatihan</label>
        <input type="text" class="form-control" name="nama_pelatihan" value="<?php echo $nama_pelatihan; ?>"/>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Tanggal</label>
        <input type="text" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>"/>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Dosen</label>
        <input type="text" class="form-control" name="dosen" value="<?php echo $dosen; ?>"/>
    </div>
    <div class="mb-3 elemet_form">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="editor"><?php echo $deskripsi; ?></textarea>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Gambar</label>
        <input type="file" class="form-control input_gambar" name="file"/> <?php echo $gambar; ?>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Soal Ujian</label>
        <input type="file" class="form-control input_gambar" name="file_ujian"/> <?php echo $file_ujian; ?>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Link Sertifikat</label>
        <input type="url" class="form-control input_gambar" name="link_sertifikat"/> <?php echo $link_sertifikat; ?>
    </div>
    <div class="row">
        <div class="col">
            <label class="form-label">Materi Minggu 1</label>
            <input type="file" class="form-control input_gambar" name="materi_m1"/> <?php echo $materi_m1; ?>
        </div>
        <div class="col">
            <label class="form-label">Materi Minggu 2</label>
            <input type="file" class="form-control input_gambar" name="materi_m2"/> <?php echo $materi_m2; ?>
        </div>
        <div class="col">
        <label class="form-label">Materi Minggu 3</label>
            <input type="file" class="form-control input_gambar" name="materi_m3"/> <?php echo $materi_m3; ?>
        </div>
        <div class="col">
            <label class="form-label">Materi Minggu 4</label>
            <input type="file" class="form-control input_gambar" name="materi_m4"/> <?php echo $materi_m4; ?>
        </div>
        <div class="col">
            <label class="form-label">Materi Minggu 5</label>
            <input type="file" class="form-control input_gambar" name="materi_m5"/> <?php echo $materi_m5; ?>
        </div>
        <div class="col">
            <label class="form-label">Materi Minggu 6</label>
            <input type="file" class="form-control input_gambar" name="materi_m6"/> <?php echo $materi_m6; ?>
        </div>
        <div class="col">
            <label class="form-label">Materi Minggu 7</label>
            <input type="file" class="form-control input_gambar" name="materi_m7"/> <?php echo $materi_m7; ?>
        </div>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Status</label>
            <span class="element_status">
                <input type="radio" name="status" value="on" <?php if($status == "on"){echo "checked='true'";} ?> /> On
                <input type="radio" name="status" value="off" <?php if($status == "off"){echo "checked='true'";} ?> /> Off
            </span>
        </div>
    <button type="submit" class="btn btn-primary" name="button" value="<?php echo $button;?>"><?php echo $button;?></button>
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
