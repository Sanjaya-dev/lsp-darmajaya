<div class="frame-tambah">
    <!-- tombol tambah kategori -->
    <a class='btn btn-primary' href="<?php echo BASE_URL."index.php?page=dashboard&module=kategori&action=form";?>">+ Tambah Kategori</a>
</div>
<?php
    $query_kategori = mysqli_query($koneksi,"SELECT * FROM kategori");

    if(mysqli_num_rows($query_kategori) == 0){
        echo "<h3>Saat ini belum ada nama kategori pada tabel kategori</h3>";
    }else{
        echo "<table class='table table-hover table_list'>";
        echo "<tr class='table-light baris_judul'>
                <th scope='col'>Nomor</th>
                <th scope='col'>Kategori</th>
                <th scope='col'>Status</th>
                <th scope='col'>Action</th>
            </tr>";
        echo "<tbody>";
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query_kategori)){
                echo "<tr>
                        <td>$nomor</td>
                        <td>$row[kategori]</td>
                        <td>$row[status]</td>
                        <td>
                            <a class='btn btn-primary' href='".BASE_URL."index.php?page=dashboard&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
                        </td>
                    </tr>";
                $nomor ++;
            }
        echo "</tbody>";
        echo "</table>";
    }

?>