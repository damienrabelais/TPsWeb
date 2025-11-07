<html>
<body>
<?php
    $g = $_GET['txtG'];
    $txtInstant = $_GET['txtInstant'];
            
    echo "<table bgcolor = lightblue border = 1>"; // a mettre dans CSS, normalement !
    echo "<TR>
    <TD>t écoulé (s)</TD>
    <TD>Vitesse acquise (m/s)</TD>
    <TD>Distance parcourue (mètres)</TD>
    </TR>";
    for ($t = 0; $t <= $txtInstant; $t++) {
        $vacquise = $g*$t;
        $distance_parcourue = $g*$t*$t /2;
        echo 
        "<TR>
            <TD>".$t."</TD>
            <TD>".$g*$t."</TD>
            <TD>".$distance_parcourue."</TD>
        </TR>";
    }
    echo "</table>";
?>
</body>
</html>
