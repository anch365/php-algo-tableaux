<?php
$months = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout", //l'ancien
    "septembre",
    "octobre",
    "novembre",
    "décembre"
];
// correction
$months[7] = "août";

// EXERCICE 5
$departements = [
    2 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme",
    51 => "Marne",
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Tableaux</title>
</head>

<body>
    <h2>Exercice 1</h2>
    <p>Créer un tableau <strong>months</strong> et l'initialiser</p>

    <h2>Exercice 2</h2>
    <p>La valeur de la 3 ème ligne du tableau de l'exo 1 : <?= $months[2] ?></p>

    <h2>Exercice 3</h2>
    <p>La valeur de l'index 5 du tableau de l'exo 1 : <?= $months[5] ?> </p>

    <h2>Exercice 4</h2>
    <p>Modifier le mois de <strong>aout</strong> en lui ajoutant l'accent manquant => <?= $months[7] ?></p>

    <h2>Exercice 5</h2>
    <p>Faire un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom</p>

    <h2>Exercice 6</h2>
    <p>En se basant du tableau associatif de l'exercice 5, affichons la valeur de l'index 59 : <?= $departements[59] ?></p>

    <h2>Exercice 7</h2>
    <p>Ajouter la ligne correspondant au département de la ville de Reims</p>

    <h2>Exercice 8</h2>
    <p>Dans le tableau 1, utilisons une boucle pour afficher toutes les valeurs du tableau : <br> <?php foreach ($months as $month) { ?>
            <?= $month, "<br>" ?>
        <?php } ?>
    </p>

    <h2>Exercice 9</h2>
    <p>Dans le tableau 2, affichons toutes les valeurs de ce tableau : <br> <?php foreach ($departements as $value) { ?>
            <?= $value, "<br>" ?>
        <?php } ?></p>

    <h2>Exercice 10</h2>
    <p>Dans le tableau de l'exercice 5, affichons toutes les valeurs de ce tableau ainsi que les clés associés : <br>
    <?php foreach ($departements as $key => $departement) {?>
      <?= "Le département ". $departement. " a le numéro ". $key. "<br>"?>
    <?php } ?>
    </p>
</body>

</html>