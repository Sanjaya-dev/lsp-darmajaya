<?php
    $user_id = isset($_GET['user_id']) ? $_GET['user_id']:false;

    // $kategori = "";
    // $status = "";
    // $button = "Add";

    if($user_id){
        $query = mysqli_query($koneksi,"SELECT * FROM user Where user_id='$user_id'");
        $row = mysqli_fetch_assoc($query);
        $nama_lengkap = $row['nama_lengkap'];
        $email = $row['email'];
        $level = $row['level'];
        $status = $row['status'];
        $button = 'Update';
    }





?>
<form action="<?php echo BASE_URL."module/user/action.php?user_id=$user_id"; ?>" method="POST">
    <div class="mb-3 elemet_form">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>"/>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>"/>
    </div>
    <div class="mb-3 elemet_form">
        <label class="form-label">Level</label>
        <span class="element_status">
			<input type="radio" value="pengguna" name="level" <?php if($level == "pengguna"){ echo "checked"; } ?> /> Pengguna
			<input type="radio" value="admin" name="level" <?php if($level == "admin"){ echo "checked"; } ?> /> Admin			
		</span>
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