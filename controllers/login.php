<?php
session_start();

// Exo 3 :
// $username = 'jon';
// $password = '1234';

// Exo 4 : 
$users = [
    [
        'name' => 'jon',
        'password' => '1234'
    ],
    [
        'name' => 'jane',
        'password' => '0000'
    ],
    [
        'name' => 'martin',
        'password' => 'azerty'
    ],
];

foreach ($users as $user) {
    if ($_POST['name'] == $user['name'] && $_POST['password'] == $user['password']) {
        $_SESSION['pseudo'] = $_POST['name'];   // Logique : nom de session de l'utilisateur
        $_SESSION['isConnected'] = true;        // Logique : l'utilisateur est connecté !
        header('Location: /');
        exit();
    }
}

header('Location: /connection.php');
exit();