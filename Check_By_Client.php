<?php
    $sql = "SELECT start, stop, in_trafic, out_trafic FROM seanse WHERE FID_Client = '$selected'";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr> <th>$row[start]</th> <th>$row[stop]</th> <th>$row[in_trafic]</th> <th>$row[out_trafic]</th> </tr>";
    }

?>