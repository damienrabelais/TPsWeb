<html>
<body>
<table border=1>
<tr><td>Vitesse</td><td><?php echo $_GET["txtVitesse"]; ?></td></tr>
<tr><td>Durée</td><td><?php echo $_GET["txtDuree"]; ?></td></tr>
</table>
<?php
$C = 300000; // vitesse de la lumière
$dureeTerre = $_GET["txtDuree"] / sqrt(1 - (pow($_GET["txtVitesse"],2) / pow($C, 2)));
echo "Durée écoulée sur la terre = ".$dureeTerre;
?>
</body>
</html>