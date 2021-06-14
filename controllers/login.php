<?php
session_start();


$_SESSION['pseudo'] = $_POST['name']; // Logique : l'utilisateur est connecté !

header('Location: /');