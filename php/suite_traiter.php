<!DOCTYPE html>
<html lang="fr">
<body>
<?php
    $U = $_GET['txtValeurDepart'];
    $n = $_GET['txtRang'];
    echo  "Valeur pour le rang 0 : ".$U."<br>";
    for ($i = 0; $i <= $n; $i++) {
        $U = $U / 4 + 2;
        echo "Valeur pour le ".$i."ème rang : ".$U."<br>";
    }
?>
</body>
</html>
