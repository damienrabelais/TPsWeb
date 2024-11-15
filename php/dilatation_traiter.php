<!DOCTYPE html>
<html lang="fr">
<body>
<?php
    $C = 300000;
    $dureeSurTerre = $_GET['txtDureeFusee']/sqrt(1 - pow($_GET['txtVitesse'], 2)/pow($C, 2));
    echo "Durée écoulée sur la terre = " . $dureeSurTerre;
?>
</body>

</html>