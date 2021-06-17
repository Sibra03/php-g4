<?php session_start() ?>
<header>
    <nav id="navbar">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="users.php">Utilisateurs</a></li>
            <?php if (isset($_SESSION['isConnected'])): ?>
                <li>Bonjour, <?= $_SESSION['pseudo'] ?> !</li>
                <li><a href="controllers/logout.php">Déconnexion</a></li>
            <?php else: ?>
                <li><a href="connection.php">Connexion</a></li>
            <?php endif ?>
       </ul>
    </nav>
</header>