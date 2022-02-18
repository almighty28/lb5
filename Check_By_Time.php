<?php
    $sql = "SELECT start, stop, in_trafic, out_trafic, FID_Client FROM seanse WHERE start BETWEEN ? AND ?";
    $sth = $dbh->prepare($sql);
    $sth->execute(array($date_in,$date_out));
    $res = $sth->fetchAll();
    echo "<table border = 1 align = 'center'> <tr> <th>Начало сеанса</th> <th>Конец сеанса</th> <th>Входящий трафик</th> <th>Исходящий трафик</th> <th>Номер Клиента</th></tr>";
    foreach ($res as $row)
    {
        echo "<tr> <th>$row[start]</th> <th>$row[stop]</th> <th>$row[in_trafic]</th> <th>$row[out_trafic]</th> <th>$row[FID_Client]</th></tr>";
    }
    echo "</table>";

?>