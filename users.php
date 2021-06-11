<?php
// Un nom, une couleur préférée, un âge
$users = [
    [
        'age' => 86,
        'color' => 'rouge', 
        'name' => 'Paulette', 
    ],
    [
        'color' => 'bleu', 
        'name' => 'Martin', 
        'age' => 12,
    ],
    
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/users.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>
    <?php require_once 'templates/header.html' ?>
    <main>
        <h1>Liste des utilisateurs</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Age</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['color'] ?></td>
                    <td><?= $user['age'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>    
    </main>
</body>
</html>