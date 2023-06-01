<?php
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id']:false;

    $kategori = "";
    $status = "";
    $button = "Add";

    if($kategori_id){
        $query = mysqli_query($koneksi,"SELECT * FROM kategori Where kategori_id='$kategori_id'");
        $row = mysqli_fetch_assoc($query);
        $kategori = $row['kategori'];
        $status = $row['status'];
        $button = 'Update';
    }





?>
<form action="<?php echo BASE_URL."module/kategori/action.php?kategori_id=$kategori_id"; ?>" method="POST">
    <div class="mb-3 elemet_form">
        <label class="form-label">Kategori</label>
        <input type="text" class="form-control" name="kategori" value="<?php echo $kategori; ?>"/>
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