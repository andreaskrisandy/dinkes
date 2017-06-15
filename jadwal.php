<?php
    $kelas = mysql_fetch_array(mysql_query("select * from kelas where kelas_id = '$_GET[kelas]'"));
    echo "<h2>$kelas[kelas_name]</h2>";
	$query = mysql_query("select j.*, k.*, g.* from jadwal j join kelas k, guru g where j.kelas_id = k.kelas_id and j.nip = g.nip and j.kelas_id = '$_GET[kelas]'");
    echo "<center><table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\" style=\"width: 100%\"><thead>
                  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Hari</th><th align=\"center\">Jam</th><th align=\"center\">Kode Mapel</th><th align=\"center\">Mata Pelajaran</th><th align=\"center\">Guru</th></tr></thead>";
            $no = 1;
            while ($data = mysql_fetch_array($query)){
                echo "<tbody><tr bgcolor=\"#ffffff\">";
                    echo "<td align=\"center\">$no</td>";
                    echo "<td>$data[hari]</td>";
                    echo "<td>$data[jam]</td>";
                    echo "<td>$data[kmapel]</td>";
                    echo "<td>$data[mapel]</td>";
                    echo "<td>$data[guru_name]</td>";
                echo "</tr></tbody>";
                $no++;
            }
            echo "</table></center>";
?>