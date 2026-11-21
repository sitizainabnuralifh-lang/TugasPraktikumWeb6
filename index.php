<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan PHP</title>
</head>
<body>

    <h2>1. Bilangan Genap 1 sampai 10</h2>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    ?>

    <h2>2. Tabel Perkalian 1 sampai 10</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Bilangan</th>

            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";

            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>