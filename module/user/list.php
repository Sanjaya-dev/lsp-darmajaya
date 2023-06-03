<div class="frame-tambah">
    <!-- tombol tambah kategori -->
    <!-- <a class='btn btn-primary' href="<?php echo BASE_URL."index.php?page=dashboard&module=user&action=form";?>">+ Tambah User</a> -->
</div>
<?php
    $query_user = mysqli_query($koneksi,"SELECT * FROM user");

    if(mysqli_num_rows($query_user) == 0){
        echo "<h3>Saat ini belum ada user pada tabel user</h3>";
    }else{
        echo "<table class='table table-hover table_list'>";
        echo "<tr class='table-light baris_judul'>
                <th scope='col'>Nomor</th>
                <th scope='col'>Nama Lengkap</th>
                <th scope='col'>Email</th>
                <th scope='col'>Level</th>
                <th scope='col'>Status</th>
                <th scope='col'>Action</th>
            </tr>";
        echo "<tbody>";
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query_user)){
                echo "<tr>
                        <td>$nomor</td>
                        <td>$row[nama_lengkap]</td>
                        <td>$row[email]</td>
                        <td>$row[level]</td>
                        <td>$row[status]</td>
                        <td>
                            <a class='btn btn-primary' href='".BASE_URL."index.php?page=dashboard&module=user&action=form&user_id=$row[user_id]'>Edit</a>
                        </td>
                    </tr>";
                $nomor ++;
            }
        echo "</tbody>";
        echo "</table>";
    }

?>