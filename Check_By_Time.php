<?php
    $sql = "SELECT start, stop, in_trafic, out_trafic, FID_Client FROM seanse WHERE start BETWEEN '$date_in' AND '$date_out'";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr> <th>$row[start]</th> <th>$row[stop]</th> <th>$row[in_trafic]</th> <th>$row[out_trafic]</th> <th>$row[FID_Client]</th></tr>";
    }

?>