<?php
echo "<table border=1>";
for ($noLigne = 0; $noLigne < 10; $noLigne++) {
    echo "<tr><td>" . $noLigne . "</td></tr>";
}
echo "</table>";

echo "Tables de multiplication";
echo "<table border=1>";
for ($n = 1; $n <= 10; $n++) {
    echo "<tr>";
    for ($facteur = 1; $facteur <= 10; $facteur++) {
        echo "<td>" . ($n * $facteur) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
