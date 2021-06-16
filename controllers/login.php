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
    $_SESSION['isConnected'] = true;
    header('Location: /');
    exit();
} else {
    header('Location: /connection.php');
    exit();
}


foreach ($users as $user) {
    //var_dump($_POST); die;
    //echo $user["name_id"];
    //echo $user["password"];
    $_SESSION["pseudo"] = $_POST["name_id"];
    header("Location: / ");
    exit();
}
    
if($_POST["name_id"] != $user["name_id"] && $_POST["password"] != $user["password"]) {
    header("Location: /connexion.php");
    exit(); 
} else {
    header("Location: /connexion.php");
    exit(); 
} ; 