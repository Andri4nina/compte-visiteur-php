<!DOCTYPE html>
<html>
<head>
    <title>Compteur de Visiteurs</title>
</head>
<body>
    <h1>Compteur de Visiteurs</h1>
    <?php require_once 'compteur.php'; 
        ajouter_vue();
        $vue = nombre_vue();
    ?>
    <p>Nombre de visiteurs : <?php echo $vue ?></p>
</body>
</html>


