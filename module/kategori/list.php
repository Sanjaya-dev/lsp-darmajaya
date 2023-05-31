<div class="frame-tambah">
    <!-- tombol tambah kategori -->
    <a href="<?php echo BASE_URL."index.php?page=dashboard&module=kategori&action=form";?>">+ Tambah Kategori</a>
</div>
<?php
    $query_kategori = mysqli_query($koneksi,"SELECT * FROM kategori");

    if(mysqli_num_rows($query_kategori) == 0){
        echo "<h3>Saat ini belum ada nama kategori pada tabel kategori</h3>";
    }else{
       echo "<table>";
       echo "<tr>
                <th>nomor</th>
                <th>nama kategori</th>
                <th>status</th>
            </tr>";
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query_kategori)){
                echo "<tr>
                        <td>$nomor</td>
                        <td>$row[kategori]</td>
                        <td>$row[status]</td>
                        <td>
                            <a href='".BASE_URL."index.php?page=dashboard&module=kategori&action=form&kategori=$row[kategori_id]'>Edit</a>
                        </td>
                    </tr>";
                $nomor ++;
            }
        echo "</table>";
    }

?>