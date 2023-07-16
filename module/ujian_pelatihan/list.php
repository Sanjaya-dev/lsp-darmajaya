
<?php
    $query_ujian_pelatihan = mysqli_query($koneksi,"SELECT * FROM ujian_pelatihan,user,pelatihan 
                                        WHERE ujian_pelatihan.user_id = user.user_id AND ujian_pelatihan.pelatihan_id = pelatihan.pelatihan_id");
    

    if(mysqli_num_rows($query_ujian_pelatihan) == 0){
        echo "<h3>Saat ini belum ada user pada tabel user</h3>";
    }else{
        echo "<table class='table table-hover table_list'>";
        echo "<tr class='table-light baris_judul'>
                <th scope='col'>Nomor</th>
                <th scope='col'>Nama Lengkap</th>
                <th scope='col'>Npm</th>
                <th scope='col'>Pelatihan</th>
                <th scope='col'>Waktu Ujian</th>
                <th scope='col'>Status Ujian</th>
                <th scope='col'>Action</th>
            </tr>";
        echo "<tbody>";
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query_ujian_pelatihan)){
                echo "<tr>
                        <td>$nomor</td>
                        <td>$row[nama_lengkap]</td>
                        <td>$row[npm]</td>
                        <td>$row[nama_pelatihan]</td>
                        <td>$row[waktu_ujian]</td>
                        <td>$row[status_ujian]</td>
                        <td>
                            <a class='btn btn-primary' href='".BASE_URL."index.php?page=dashboard&module=ujian_pelatihan&action=form&ujian_id=$row[ujian_id]'>Edit</a>
                        </td>
                    </tr>";
                $nomor ++;
            }
        echo "</tbody>";
        echo "</table>";
    }

?>