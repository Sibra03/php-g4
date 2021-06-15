<?php

session_start(); // Je donne l'accès aux sessions
session_destroy(); // Je détruis TOUTES les informations de $_SESSION // Logique : l'utilisateur est déconnecté !
header('Location: /'); // Je redirige