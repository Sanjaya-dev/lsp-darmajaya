
<?php
    $query_pelatihan_1 = mysqli_query($koneksi,"SELECT * FROM ujian_pelatihan,user,pelatihan 
                                        WHERE ujian_pelatihan.user_id = user.user_id AND ujian_pelatihan.pelatihan_id = pelatihan.pelatihan_id AND ujian_pelatihan.user_id ='$user_id'");
    

    if(mysqli_num_rows($query_pelatihan_1) == 0){
        echo "<h3>Saat ini belum ada ujian yang anda ikuti</h3>";
    }else{
        echo "<table class='table table-hover table_list'>";
        echo "<tr class='table-light baris_judul'>
                <th scope='col'>Nomor</th>
                <th scope='col'>Nama Lengkap</th>
                <th scope='col'>Npm</th>
                <th scope='col'>Nama Pelatihan</th>
                <th scope='col'>Nilai</th>
                <th scope='col'>Status</th>
                <th scope='col'>Sertifikat</th>
            </tr>";
        echo "<tbody>";
            
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query_pelatihan_1)){
                echo "<tr>
                        <td>$nomor</td>
                        <td>$row[nama_lengkap]</td>
                        <td>$row[npm]</td>
                        <td>$row[nama_pelatihan]</td>
                        <td>$row[nilai]</td>
                        <td>$row[status_ujian]</td>";
                        if($row['nilai'] >= 65){
                            echo"
                            <td>
                                <a class='btn btn-primary' href='$row[link_sertifikat]' target='_blank'>Download</a>
                            </td>";
                        }elseif($row['nilai'] == 0){
                            echo "<td>
                                    <p><b>Jawaban anda sedang diperiksa oleh admin</b></p>
                                </td>";
                        }else{
                            echo "<td>
                                    <p><b>Maaf anda belum lolos</b></p>
                                </td>";
                        }
                   echo "</tr>";
                $nomor ++;
            }
        echo "</tbody>";
        echo "</table>";
    }

?>