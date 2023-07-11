<?php
require_once 'config.inc.php';

$result = mysqli_query($mysqli, "SELECT * FROM basketball_members ORDER BY achternaam");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ledenbeheer</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ledenbeheer</h1>
    <p><a href="nieuw_lid.php">klik hier</a>om een nieuw lid te worden</p>

    <?php

    echo "<table>";

    echo "<tr>";

    echo "<th>ID</th>";
    echo "<th>naam</th>";
    echo "<th>achternaam</th>";
    echo "<th>leeftijd</th>";
    echo "<th>tel</th>";
    echo "<th>email</th>";
    echo "<th>rugnummer</th>";
    echo "<th>positie</th>";

    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {

        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['achternaam'] . "</td>";
        echo "<td>" . $row['leeftijd'] . "</td>";
        echo "<td>" . $row['tel'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['rugnummer'] . "</td>";
        echo "<td>" . $row['positie'] . "</td>";

        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>

</html>