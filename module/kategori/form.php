<?php
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id']:false;

    $kategori = "";
    $status = "";
    $button = "Add";


?>
<form action="">
    <div>
        <lable>Kategori</lable>
        <span><input type="text" name="nama_kategori" value="<?php echo $kategori; ?>"></span>
    </div>
    <div>
        <lable>Status<lable>
        <span>
            <input type="radio" name="status" value="on" <?php if($status == "on"){echo "checked='true'";} ?>>On
            <input type="radio" name="status" value="off" <?php if($status == "off"){echo "checked='true'";} ?>>Off
        </span>
    </div>
    <div>
        <span>
            <input type="submit" name="button" value="">
        </span>
    </div>
</form>