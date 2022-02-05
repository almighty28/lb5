<?php
    $sql = "SELECT ID_Client, name, IP, balance FROM client WHERE balance < 0 ";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr> <th>$row[ID_Client]</th> <th>$row[name]</th> <th>$row[IP]</th> <th>$row[balance]</th></tr>";
    }

?>