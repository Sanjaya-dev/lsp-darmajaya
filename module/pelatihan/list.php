<div class="frame-tambah">
    <!-- tombol tambah kategori -->
    <a class='btn btn-primary' href="<?php echo BASE_URL."index.php?page=dashboard&module=pelatihan&action=form";?>">+ Tambah Pelatihan</a>
</div>
<?php
    $query_pelatihan = mysqli_query($koneksi,"SELECT * FROM pelatihan");

    if(mysqli_num_rows($query_pelatihan) == 0){
        echo "<h3>Saat ini belum ada pelatihan pada tabel pelatihan</h3>";
    }else{
        echo "<table class='table table-hover table_list'>";
        echo "<tr class='table-light baris_judul'>
                <th scope='col'>Nomor</th>
                <th scope='col'>Pelatihan</th>
                <th scope='col'>Tanggal</th>
                <th scope='col'>Dosen</th>
                <th scope='col'>Status</th>
                <th scope='col'>Action</th>
            </tr>";
        echo "<tbody>";
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query_pelatihan)){
                echo "<tr>
                        <td>$nomor</td>
                        <td>$row[nama_pelatihan]</td>
                        <td>$row[tanggal]</td>
                        <td>$row[dosen]</td>
                        <td>$row[status]</td>
                        <td>
                            <a class='btn btn-primary' href='".BASE_URL."index.php?page=dashboard&module=pelatihan&action=form&pelatihan_id=$row[pelatihan_id]'>Edit</a>
                        </td>
                    </tr>";
                $nomor ++;
            }
        echo "</tbody>";
        echo "</table>";
    }

?>