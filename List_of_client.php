<?php
    $sql = "SELECT ID_Client, name, IP, balance FROM client WHERE balance < 0 ";
    echo "<table border = 1 align = 'center'> <tr> <th>Номер клиента</th> <th>Имя клиента</th> <th>IP</th> <th>Баланс</th> </tr>";
    foreach ($dbh->query($sql) as $row)
    {
        echo "<tr> <th>$row[ID_Client]</th> <th>$row[name]</th> <th>$row[IP]</th> <th>$row[balance]</th></tr>";
    }
    echo "</table>";

?>