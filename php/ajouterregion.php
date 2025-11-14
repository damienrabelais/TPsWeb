<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ajout d'une région</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    if (!isset($_GET['btnEnvoyer'])) {/* L'entrée btnEnvoyer est vide = le formulaire n'a pas été posté, on affiche le formulaire */
        echo '
    <form action="" method="get" ">
Numéro: <input name="txtNumero" type="text" size="30""><BR/><BR/>
Nom région : <input name="txtNomRegion" type="text" size="30""><BR/><BR/>
<input type="submit" value="Ajouter région" name="btnEnvoyer">
    </form>';
    } else
    /* L'utilisateur a cliqué sur Envoyer, l'entrée btnEnvoyer <> vide, on traite le formulaire */ {

        // On se connecte
        require_once('conf/connexion.php');

        // compilation de la requête
        $stmt = $connexion->prepare("INSERT INTO region VALUES (:numero, :nomRegion)");

        // insertion d'une ligne
        $numero = $_GET['txtNumero'];
        $nomRegion = $_GET['txtNomRegion'];

        $stmt->bindValue(':numero', $numero, PDO::PARAM_STR);
        $stmt->bindValue(':nomRegion', $nomRegion, PDO::PARAM_STR);
        /* numero passé en STR ... possible !*/

        $stmt->execute();
        $nb_ligne_affectees = $stmt->rowCount();
        echo $nb_ligne_affectees . " ligne() insérée(s).<BR>";
    }
    ?>

</body>

</html>