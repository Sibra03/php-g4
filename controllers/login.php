<?php
session_start();

// Exo 3 :
$username = 'jon';
$password = '1234';

// Exo 4 : 
// $users = [
//     [
//         'name' => 'jon',
//         'password' => '1234'
//     ],
//     [
//         'name' => 'jane',
//         'password' => '0000'
//     ],
//     [
//         'name' => 'martin',
//         'password' => 'azerty'
//     ],
// ]


if ($_POST['name'] == $username && $_POST['password'] == $password) {
    $_SESSION['pseudo'] = $_POST['name']; // Logique : l'utilisateur est connecté !
    header('Location: /');
    exit();
} else {
    header('Location: /connection.php');
    exit();
}

